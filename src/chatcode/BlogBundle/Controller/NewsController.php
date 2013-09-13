<?php

namespace chatcode\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use chatcode\BlogBundle\Entity\News;
use chatcode\BlogBundle\Entity\Comment;

class NewsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
                    ->getManager();
        
        $news = $em->getRepository('ChatcodeBlogBundle:News')->findAll();
        
        return $this->render('ChatcodeBlogBundle:Blog:news.html.twig', array('news' => $news));
    }
}
