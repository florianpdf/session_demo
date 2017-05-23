<?php

namespace SessionTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SessionTestBundle:Default:index.html.twig');
    }
}
