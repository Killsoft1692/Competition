<?php

namespace Killsoft\CompetitionBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Killsoft\CompetitionBundle\Entity\Data;
use Killsoft\CompetitionBundle\Form\Type\DataType;

/**
 * Class ActionController
 * @package Killsoft\CompetitionBundle\Controller
 */
class ActionController extends Controller
{
    /**
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function formAction(Request $request)
    {
        $data = new Data();

        $form = $this->createForm(new DataType(), $data);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);
            $em->flush();

            return $this->redirect($this->generateUrl('main_result'));
        }

        return $this->render('KillsoftCompetitionBundle:Form:form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('KillsoftCompetitionBundle:Form:index.html.twig', array(
            'answer' => $this->get('answer')->create()
        ));
    }

}
