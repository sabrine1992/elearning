<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 06/06/2018
 * Time: 12:27
 */

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AffichercoursController  extends Controller
{
    public function affichercoursAction($id)
    {

        $em = $this->getDoctrine()->getEntityManager();

        $form = $em->getRepository('MainBundle:Cours')->findBy(array('id'=>$id,));

        return $this->render('MainBundle:Cours:affichercours.html.twig', array(
            'form' => $form,
        ));
    }

}