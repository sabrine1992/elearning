<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 15/02/2018
 * Time: 16:42
 */

namespace MainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LayoutController extends Controller
{
    public function layoutAction()
    {
        return $this->render('MainBundle::layout.html.twig');
    }
}
