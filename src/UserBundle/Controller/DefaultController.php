<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class DefaultController extends Controller
{
    public function indexAction( Request $request)
    {
        return $this->render('UserBundle:Default:index.html.twig',[
            'base_dir'=>realpath($this->getParameter('kernal.root_dir').'/..'),]);
    }
}
