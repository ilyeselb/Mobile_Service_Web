<?php

namespace MyApp\RevisionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppRevisionBundle:Default:index.html.twig');
    }
}
