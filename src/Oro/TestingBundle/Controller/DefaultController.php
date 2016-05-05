<?php

namespace Oro\TestingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OroTestingBundle:Default:index.html.twig');
    }
}
