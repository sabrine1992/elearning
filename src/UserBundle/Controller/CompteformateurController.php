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

class CompteformateurController  extends Controller
{
    public function compteformateurAction()
    {

        $em = $this->getDoctrine();
        $form= $em->getRepository('UserBundle:User')
            ->findAll();
        return $this->render('UserBundle:Profile:compteformateur.html.twig', array(
            'user' => $form,
        ));
    }

}