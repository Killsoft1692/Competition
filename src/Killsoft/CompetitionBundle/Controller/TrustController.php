<?php

namespace Killsoft\CompetitionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Killsoft\CompetitionBundle\Entity\Data;

/**
 * Class TrustController
 * @package Killsoft\CompetitionBundle\Controller
 */
class TrustController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showusersAction()
    {
        $users = $this->getDoctrine()->getRepository('KillsoftCompetitionBundle:Data')->findAll();

        return $this->render('KillsoftCompetitionBundle:Users:users.html.twig', array(
            'users' => $users
        ));
    }
}
