<?php

namespace Mandic\FastTrackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller
{
    public function indexAction()
    {
	return $this->render('MandicFastTrackBundle:Admin:index.html.twig');
    }
}
