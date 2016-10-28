<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EditorController extends Controller
{
    /**
     * @Route("/editor")
     */
    public function principalAction()
    {
        return $this->render('AppBundle:Editor:principal.html.twig', array(
            // ...
        ));
    }

}
