<?php

namespace chatcode\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChatcodeBlogBundle:Blog:index.html.twig');
    }
}
