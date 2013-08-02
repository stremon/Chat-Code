<?php

namespace chatcode\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ChatcodeBlogBundle:Blog:index.html.twig', array('name'=>$name));
    }
}
