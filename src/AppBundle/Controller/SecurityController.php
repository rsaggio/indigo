<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login")
     */
    public function formAction()
    {
        return $this->render('AppBundle:Security:form.html.twig', array(
            // ...
        ));
    }

}
