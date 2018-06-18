<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 31/05/2018
 * Time: 11:49
 */

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\User;

class CompteapprenantController  extends Controller
{
    public function compteapprenantAction()
    {

        $em = $this->getDoctrine();
        $form= $em->getRepository('UserBundle:User')
            ->findAll();
        return $this->render('UserBundle:Profile:compteapprenant.html.twig', array(
            'user' => $form,
        ));
    }

}