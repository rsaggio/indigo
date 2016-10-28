<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Setor;
use AppBundle\Form\SetorType;

/**
 * Setor controller.
 *
 * @Route("/setor")
 */
class SetorController extends Controller
{
    /**
     * Lists all Setor entities.
     *
     * @Route("/", name="setor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $setors = $em->getRepository('AppBundle:Setor')->findAll();

        return $this->render('setor/index.html.twig', array(
            'setors' => $setors,
        ));
    }

    /**
     * Creates a new Setor entity.
     *
     * @Route("/new", name="setor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $setor = new Setor();
        $form = $this->createForm('AppBundle\Form\SetorType', $setor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($setor);
            $em->flush();

            return $this->redirectToRoute('setor_show', array('id' => $setor->getId()));
        }

        return $this->render('setor/new.html.twig', array(
            'setor' => $setor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Setor entity.
     *
     * @Route("/{id}", name="setor_show")
     * @Method("GET")
     */
    public function showAction(Setor $setor)
    {
        $deleteForm = $this->createDeleteForm($setor);

        return $this->render('setor/show.html.twig', array(
            'setor' => $setor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Setor entity.
     *
     * @Route("/{id}/edit", name="setor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Setor $setor)
    {
        $deleteForm = $this->createDeleteForm($setor);
        $editForm = $this->createForm('AppBundle\Form\SetorType', $setor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($setor);
            $em->flush();

            return $this->redirectToRoute('setor_edit', array('id' => $setor->getId()));
        }

        return $this->render('setor/edit.html.twig', array(
            'setor' => $setor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Setor entity.
     *
     * @Route("/{id}", name="setor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Setor $setor)
    {
        $form = $this->createDeleteForm($setor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($setor);
            $em->flush();
        }

        return $this->redirectToRoute('setor_index');
    }

    /**
     * Creates a form to delete a Setor entity.
     *
     * @param Setor $setor The Setor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Setor $setor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('setor_delete', array('id' => $setor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
