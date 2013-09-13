<?php

namespace chatcode\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuHeaderAction()
    {
        $menu = array(
            array('id' => 2, 'title' => 'Actus', 'path' => 'chatcodeblog_home'),
            array('id' => 3, 'title' => 'Astuces', 'path' => 'chatcodeblog_tips'),
            array('id' => 4, 'title' => 'Site du jour', 'path' => 'chatcodeblog_website'),
            array('id' => 5, 'title' => 'Tutoriels', 'path' => 'chatcodeblog_tutorials'),
            array('id' => 6, 'title' => 'Ressources', 'path' => 'chatcodeblog_resources'),
        );
        return $this->render('ChatcodeBlogBundle:Menu:menu-header.html.twig', array('menu' => $menu));
    }
    
    public function menuFooterAction()
    {
        $menu = array(
            array('id' => 2, 'title' => 'Contact', 'path' => 'chatcodeblog_contact'),
        );
        return $this->render('ChatcodeBlogBundle:Menu:menu-footer.html.twig', array('menu' => $menu));
    }
}
