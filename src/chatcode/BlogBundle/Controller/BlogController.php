<?php

namespace chatcode\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use chatcode\BlogBundle\Entity\Article;
use chatcode\BlogBundle\Entity\Comment;

class BlogController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
                    ->getManager();
        
        $news = $em->getRepository('ChatcodeBlogBundle:News')->findAll();
        
        return $this->render('ChatcodeBlogBundle:Blog:index.html.twig', array('news' => $news));
    }
    
    public function tipAction($slug)
    {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('ChatcodeBlogBundle:Article');
        $article = $repository->findBySlug($slug);
        if(!$article)
        {
            throw $this->createNotFoundException('Article inexistant...');
        }
        $list_comm = $em->getRepository('ChatcodeBlogBundle:Comment')->findAll();
        return $this->render('ChatcodeBlogBundle:Blog:see.html.twig', array('article'=>$article, 'list_comm'=>$list_comm));
    }
    
    public function tipsAction()
    {
        $em = $this->getDoctrine()
                    ->getManager();
        
        $tips = $em->getRepository('ChatcodeBlogBundle:Article')->findAll();
                
        $categories = $em->getRepository('ChatcodeBlogBundle:Category')
                                ->findAll();
        
        
        return $this->render('ChatcodeBlogBundle:Blog:tips.html.twig', array('tips'=>$tips, 'categories'=>$categories));
    }
    
    public function addtipsAction()
    {
        $article = new Article();
        $article->setTitle('Mon second article');
        $article->setText('ugugygu blablablbalblablabl.');
        $article->setSlug('second');
        
        $comm = new Comment();
        $comm->setAuthor('Estelle');
        $comm->setMessage('yo');
        $comm->setArticle($article);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->persist($comm);
        $em->flush();
        
        if($this->getRequest()->getMethod() == 'POST')
        {
            $this->get('session')->getFlashBag->add('info','Article bien enregistré');
            return $this->redirect($this->generateUrl('chatcodeblog_tip', array('slug'=>$article->getSlug())));
        }
        
        return $this->render('ChatcodeBlogBundle:Blog:tips.html.twig');
    }
}
