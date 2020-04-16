<?php

namespace AppBundle\Controller;

use AppBundle\Entity\client;
use CreateDocx;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Client controller.
 *
 * @Route("client")
 */
class clientController extends Controller
{
    /**
     * Lists all client entities.
     *
     * @Route("/", name="client_index", methods={"GET"})
     *
     */
    public function indexAction()
    {
        $docx = new CreateDocx();

        $docx->addText('This is a test');
        $docx->embedHTML('<p style="font-size: 30px;">New paragraph</p>');
        $docx->createDocx($rootDir . '/public/' . 'output.docx');
    }

    /**
     * Creates a new client entity.
     *
     * @Route("/new", name="client_new", methods={"GET", "POST"})
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function newAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('AppBundle\Form\clientType', $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('client_show', array('id' => $client->getId()));
        }

        return $this->render('client/new.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a client entity.
     *
     * @Route("/{id}", name="client_show", methods={"GET"})
     * @param client $client
     * @return Response
     */
    public function showAction(client $client)
    {
        $deleteForm = $this->createDeleteForm($client);

        return $this->render('client/show.html.twig', array(
            'client' => $client,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     * @Route("/{id}/edit", name="client_edit", methods={"GET", "POST"})
     * @param Request $request
     * @param client $client
     * @return RedirectResponse|Response
     */
    public function editAction(Request $request, client $client)
    {
        $deleteForm = $this->createDeleteForm($client);
        $editForm = $this->createForm('AppBundle\Form\clientType', $client);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('client_edit', array('id' => $client->getId()));
        }

        return $this->render('client/edit.html.twig', array(
            'client' => $client,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a client entity.
     *
     * @Route("/{id}", name="client_delete", methods={"GET"})
     * @param Request $request
     * @param client $client
     * @return RedirectResponse
     */
    public function deleteAction(Request $request, client $client)
    {
        $form = $this->createDeleteForm($client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($client);
            $em->flush();
        }

        return $this->redirectToRoute('client_index');
    }

    /**
     * Creates a form to delete a client entity.
     *
     * @param client $client The client entity
     *
     * @return Form|FormInterface
     */
    private function createDeleteForm(client $client)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('client_delete', array('id' => $client->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
private function documentFunction(){
        $docx=new CreateDocx();
    $docx->addText('This is a test');
    $docx->embedHTML('<p style="font-size: 30px;">New paragraph</p>');
    $docx->createDocx('output.docx');
}
}
