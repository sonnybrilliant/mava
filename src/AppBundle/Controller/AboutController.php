<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{
    /**
     * @Route("/about/{name}", name="about",defaults={"name":null})
     */
    public function aboutAction($name)
    {
        $user = null;
        if ($name) {
            $user = $this->getDoctrine()
                ->getRepository('AppBundle:User')
                ->findOneBy(array('name'=>$name));
            if (false === $user instanceof User) {
                throw $this->createNotFoundException(
                    'No user named '.$name.' found!'
                );
            }
        }
        return $this->render('about/user.html.twig', array('user' =>
            $user));
    }

    /**
     * @Route("/about/{name}/details", name="about_more",defaults={"name":null})
     */
    public function detailsAction($name)
    {
        $user = null;
        if ($name) {
            $user = $this->getDoctrine()
                ->getRepository('AppBundle:User')
                ->findOneBy(array('name'=>$name));
            if (false === $user instanceof User) {
                throw $this->createNotFoundException(
                    'No user named '.$name.' found!'
                );
            }
        }
        return $this->render('about/more.html.twig', array('user' =>
            $user));
    }
}
