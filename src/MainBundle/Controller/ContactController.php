<?php


namespace MainBundle\Controller;

use MainBundle\Entity\Contact;
use MainBundle\Form\ContactType;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContactController extends Controller
{
    public function contacterAction(Request $request)
    {
        $contct = new Contact();
        $contct->setIsread(0);
        $form = $this->createForm(ContactType::class, $contct);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contct);
            $em->flush();

            return new Response('Conatct avec succes');
        }

        return $this->render('MainBundle:Elearning:contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    public function countMsgAction()
    {
        return array('count' => 3);
        //return array();
    }

}