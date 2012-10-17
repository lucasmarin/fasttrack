<?php

namespace Mandic\FastTrackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
	return $this->render('MandicFastTrackBundle:Dashboard:index.html.twig');
    }
}
