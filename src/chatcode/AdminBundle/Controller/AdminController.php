<?php

namespace Chatcode\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;

class AdminController extends Controller
{
    /**
     * @secure(roles="ROLE_ADMIN")
     */
    public function indexAction()
    {
        return $this->render('ChatcodeAdminBundle:Admin:index.html.twig');
    }
}
