<?php

namespace Lyra\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LyraDemoBundle:Default:index.html.twig');
    }
}
