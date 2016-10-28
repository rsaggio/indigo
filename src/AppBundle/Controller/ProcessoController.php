<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Processo;

class ProcessoController extends Controller
{
    /**
     * @Route("/", name="lista_processo")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$processo = new Processo();

    	$form = $this->createForm('AppBundle\Form\ProcessoType', $processo);

    	$processos = $em->getRepository('AppBundle:Processo')->findAll();
    	
        return $this->render('AppBundle:Processo:index.html.twig', array(
            'form' => $form->createView(),
            'processos' => $processos
        ));
    }

	/**
     * @Route("/processo/save", name="salva_processo")
     */
    public function processaAction(Request $request) {

    	$processo = new Processo();
    	$form = $this->createForm('AppBundle\Form\ProcessoType', $processo);
    	$form->handleRequest($request);

    	var_dump($processo);
    	if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($processo);
            $em->flush();

            
        }
        return $this->redirectToRoute('lista_processo');

    }

    /**
     * @Route("/processo/busca", name="busca_processo")
     */
    public function buscaAction(Request $request) {
    	$nome = $request->get('nome');
    	$em = $this->getDoctrine()->getManager();
    	$processo = new Processo();
    	$processos = $em->getRepository('AppBundle:Processo')->searchProcess($nome);

    	$form = $this->createForm('AppBundle\Form\ProcessoType', $processo);

        return $this->render('AppBundle:Processo:index.html.twig', array(
            'form' => $form->createView(),
            'processos' => $processos
        ));
    }

}
