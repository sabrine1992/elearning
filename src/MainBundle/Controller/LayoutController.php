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

  public function indexelearningAction()
    {
        return $this->render('MainBundle:Elearning:index.html.twig');
    }

    public function presentationAction()
    {
        return $this->render('MainBundle:Elearning:presentation.html.twig');
    }
    public function connexionAction()
    {
        return $this->render('MainBundle:Elearning:connexion.html.twig');
    }

        public function ajouterAction()
    {
        return $this->render('MainBundle:Elearning:ajoutercompte.html.twig');
    }
    public function contacterAction()
    {
        return $this->render('MainBundle:Elearning:contact.html.twig');
    }
    public function catalogueAction()
    {
        return $this->render('MainBundle:Elearning:catalogue.html.twig');
    }
    public function calendrierAction()
    {
        return $this->render('MainBundle:Elearning:calendrier.html.twig');
    }
    public function gallerieAction()
    {
        return $this->render('MainBundle:Elearning:gallerie.html.twig');
    }
    public function inscrireAction()
    {
        return $this->render('MainBundle:Elearning:inscrireformation.html.twig');
    }
    public function formationAction()
    {
        return $this->render('MainBundle:formationandroid:formation.html.twig');
    }
    public function formateurAction()
    {
        return $this->render('MainBundle:formationandroid:formateur.html.twig');
    }
    public function prixAction()
    {
        return $this->render('MainBundle:formationandroid:prix.html.twig');
    }
    public function dureeAction()
    {
        return $this->render('MainBundle:formationandroid:duree.html.twig');
    }
    public function formationciscoAction()
    {
        return $this->render('MainBundle:formationcisco:formationcisco.html.twig');
    }
    public function formateurciscoAction()
    {
        return $this->render('MainBundle:formationcisco:formateurcisco.html.twig');
    }
    public function prixciscoAction()
    {
        return $this->render('MainBundle:formationcisco:prixcisco.html.twig');
    }
    public function dureeciscoAction()
    {
        return $this->render('MainBundle:formationcisco:dureecisco.html.twig');
    }
    public function formationmicrosoftAction()
    {
        return $this->render('MainBundle:formationmicrosoft:formationmicrosoft.html.twig');
    }
    public function formateurmicrosoftAction()
    {
        return $this->render('MainBundle:formationmicrosoft:formateurmicrosoft.html.twig');
    }
    public function prixmicrosoftAction()
    {
        return $this->render('MainBundle:formationmicrosoft:prixmicrosoft.html.twig');
    }
    public function dureemicrosoftAction()
    {
        return $this->render('MainBundle:formationmicrosoft:dureemicrosoft.html.twig');
    }
    public function formationjeeAction()
    {
        return $this->render('MainBundle:formationjee:formationjee.html.twig');
    }
    public function formateurjeeAction()
    {
        return $this->render('MainBundle:formationjee:formateurjee.html.twig');
    }
    public function prixjeeAction()
    {
        return $this->render('MainBundle:formationjee:prixjee.html.twig');
    }
    public function dureejeeAction()
    {
        return $this->render('MainBundle:formationjee:dureejee.html.twig');
    }
    public function formationwordpressAction()
    {
        return $this->render('MainBundle:formationwordpress:formationwordpress.html.twig');
    }
    public function formateurwordpressAction()
    {
        return $this->render('MainBundle:formationwordpress:formateurwordpress.html.twig');
    }
    public function prixwordpressAction()
    {
        return $this->render('MainBundle:formationwordpress:prixwordpress.html.twig');
    }
    public function dureewordpressAction()
    {
        return $this->render('MainBundle:formationwordpress:dureewordpress.html.twig');
    }
    public function formationinfographieAction()
    {
        return $this->render('MainBundle:formationinfographie:formationinfographie.html.twig');
    }
    public function formateurinfographieAction()
    {
        return $this->render('MainBundle:formationinfographie:formateurinfographie.html.twig');
    }
    public function prixinfographieAction()
    {
        return $this->render('MainBundle:formationinfographie:prixinfographie.html.twig');
    }
    public function dureeinfographieAction()
    {
        return $this->render('MainBundle:formationinfographie:dureeinfographie.html.twig');
    }
    public function formationoracleAction()
    {
        return $this->render('MainBundle:formationoracle:formationoracle.html.twig');
    }
    public function formateuroracleAction()
    {
        return $this->render('MainBundle:formationoracle:formateuroracle.html.twig');
    }
    public function prixoracleAction()
    {
        return $this->render('MainBundle:formationoracle:prixoracle.html.twig');
    }
    public function dureeoracleAction()
    {
        return $this->render('MainBundle:formationoracle:dureeoracle.html.twig');
    }
    public function formationtoeicAction()
    {
        return $this->render('MainBundle:formationtoeic:formationtoeic.html.twig');
    }
    public function formateurtoeicAction()
    {
        return $this->render('MainBundle:formationtoeic:formateurtoeic.html.twig');
    }
    public function prixtoeicAction()
    {
        return $this->render('MainBundle:formationtoeic:prixtoeic.html.twig');
    }
    public function dureetoeicAction()
    {
        return $this->render('MainBundle:formationtoeic:dureetoeic.html.twig');
    }
    public function formationlpicAction()
    {
        return $this->render('MainBundle:formationlpic:formationlpic.html.twig');
    }
    public function formateurlpicAction()
    {
        return $this->render('MainBundle:formationtoeic:formateurtoeic.html.twig');
    }
    public function prixlpicAction()
    {
        return $this->render('MainBundle:formationlpic:prixlpic.html.twig');
    }
    public function dureelpicAction()
    {
        return $this->render('MainBundle:formationlpic:dureelpic.html.twig');
    }


}