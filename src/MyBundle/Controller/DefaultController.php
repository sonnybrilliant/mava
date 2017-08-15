<?php

namespace MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="mypage")
     */
    public function indexAction()
    {
        return $this->render('MyBundle:Default:index.html.twig');
    }
}
