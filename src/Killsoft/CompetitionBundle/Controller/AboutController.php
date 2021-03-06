<?php

namespace Killsoft\CompetitionBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AboutController
 * @package Killsoft\CompetitionBundle\Controller
 */
class AboutController extends Controller
{
    /**
     * @Template()
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('KillsoftCompetitionBundle:About:index.html.twig');
    }

}
