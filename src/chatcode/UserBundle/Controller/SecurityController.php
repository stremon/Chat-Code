<?php

namespace Chatcode\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    public function loginAction()
    {
        //si le visiteur est déjà identifié, on le redirige vers l'accueil
        if($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED'))
        {
            return $this->redirect($this->generateUrl('chatcodeblog_home'));
        }
        
        if($this->get('security.context')->isGranted('ROLE_USER'))
        {
            return $this->redirect($this->generateUrl('chatcodeblog_home'));
        }
        
        $request = $this->getRequest();
        $session = $request->getSession();
        
        //on vérifie s'il y a des erreurs d'une précédente soumission au formulaire
        if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR))
        {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        else
        {
            $error = $session->get(SecurityCOntext::AUTHENTICATION_ERROR);
            $session->remove(SecurityCOntext::AUTHENTICATION_ERROR);
        }
        
        return $this->render('ChatcodeUserBundle:Security:login.html.twig', array('twig' => array('last_username'=>$session->get(SecurityContext::LAST_USERNAME), 'error'=>$error)));
    }
}
