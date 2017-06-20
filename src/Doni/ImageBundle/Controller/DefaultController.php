<?php

namespace Doni\ImageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DoniImageBundle:Default:index.html.twig');
    }
}
