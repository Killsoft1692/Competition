<?php

namespace Killsoft\CompetitionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package Killsoft\CompetitionBundle\Controller
 */
class MainController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('KillsoftCompetitionBundle:Main:index.html.twig');
    }
}
