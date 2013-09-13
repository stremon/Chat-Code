<?php

namespace chatcode\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction()
    {
        $menu = array(
            array('id' => 2, 'titre' => 'Actus', 'path' => 'actus'),
            array('id' => 3, 'titre' => 'Astuces', 'path' => 'astuces'),
            array('id' => 4, 'titre' => 'Sites du jour', 'path' => 'sites-du-jour'),
            array('id' => 5, 'titre' => 'Tutoriels', 'path' => 'tutoriels'),
            array('id' => 6, 'titre' => 'Ressources', 'path' => 'ressources'),
        );
        return $this->render('ChatcodeBlogBundle:Menu:menu.html.twig', array('menu' => $menu));
    }
}
