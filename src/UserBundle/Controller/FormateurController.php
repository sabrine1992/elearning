<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 31/05/2018
 * Time: 11:49
 */

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RequestContext;
use UserBundle\Entity\User;
use UserBundle\Form\RegistrationType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FormateurController  extends Controller
{
    public function formateurAction()
    {

        $em = $this->getDoctrine();
        $form= $em->getRepository('UserBundle:User')
            ->findAll();
        return $this->render('UserBundle:Profile:Profileformateur.html.twig', array(
            'user' => $form,
        ));
    }
    public function editerFormateurAction(Request $request, $id) {

        $formateur = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('UserBundle:User')
            ->find($id);
        $form = $this->createForm(RegistrationType::class
        , $formateur);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formateur);
            $em->flush();
        }
        return $this->render('UserBundle:Registration:register.html.twig', array(
            'form' => $form->createView(),
        ));

    }


}