<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 05/04/2018
 * Time: 10:45
 */

namespace MainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ConexionController extends Controller
{
    public function connexionAction(Request $request,AuthenticationUtils $authenticationUtils)
    {
       $errors =$authenticationUtils->getLastAuthenticationError();
        $lastUserName=$authenticationUtils->getLastUsername();
        return $this->render('MainBundle:Elearning:connexion.html.twig',array(
            'error'=>$errors,
            'username'=>$lastUserName,

        ));
    }
}