<?php

namespace chatcode\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use chatcode\BlogBundle\Entity\Article;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChatcodeBlogBundle:Blog:index.html.twig');
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
        return $this->render('ChatcodeBlogBundle:Blog:see.html.twig', array('article'=>$article));
    }
    
    public function tipsAction()
    {
        return $this->render('ChatcodeBlogBundle:Blog:tips.html.twig');
    }
    
    public function addtipsAction()
    {
        $article = new Article();
        $article->setTitle('Mon premier article');
        $article->setText('blablablbalblablabl.');
        $article->setSlug('first');
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
        
        if($this->getRequest()->getMethod() == 'POST')
        {
            $this->get('session')->getFlashBag->add('info','Article bien enregistré');
            return $this->redirect($this->generateUrl('chatcodeblog_tip', array('slug'=>$article->getSlug())));
        }
        
        return $this->render('ChatcodeBlogBundle:Blog:tips.html.twig');
    }
}
