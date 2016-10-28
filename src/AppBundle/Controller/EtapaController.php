<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Etapa;


class EtapaController extends Controller
{
    /**
     * @Route("/etapa/form")
     */
    public function formAction()
    {
        $etapa = new Etapa();
        $form = $this->createForm("AppBundle\Form\EtapaType",$etapa);
        return $this->render('AppBundle:Etapa:form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/etapa/save", name="salva_etapa")
     */
    public function salvaAction(Request $request) {
        $etapa = new Etapa();
        $form = $this->createForm("AppBundle\Form\EtapaType",$etapa);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($etapa);
            $em->flush();

            return $this->redirectToRoute('etapa_lista');
        }

    }
    /**
     * @Route("/etapa/index", name="etapa_lista")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $etapas = $em->getRepository("AppBundle:Etapa")->findAll();
        return $this->render('AppBundle:Etapa:index.html.twig', array(
            'etapas' => $etapas
        ));
    }

}
