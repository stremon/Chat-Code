<?php

namespace chatcode\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChatcodeBlogBundle:Blog:index.html.twig');
    }
    
    public function seeAction($id)
    {
        return $this->render('ChatcodeBlogBundle:Blog:see.html.twig', array('id'=>$id));
    }
    
    public function tipsAction()
    {
        return $this->render('ChatcodeBlogBundle:Blog:tips.html.twig');
    }
}
