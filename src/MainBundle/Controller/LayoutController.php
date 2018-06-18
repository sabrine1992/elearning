<?php
/**
 * Created by PhpStorm.
 * Apprenant: sabine
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

  public function indexelearningAction()
    {
        return $this->render('MainBundle:Elearning:index.html.twig');
    }
    public function presentationAction()
    {
        return $this->render('MainBundle:Elearning:presentation.html.twig');
    }
















}