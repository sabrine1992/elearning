<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 23/05/2018
 * Time: 14:28
 */

namespace MainBundle\Controller;


use MainBundle\Entity\Formation;
use MainBundle\Entity\Participersf;
use MainBundle\Entity\Session_Formation;
use MainBundle\Form\SessionformationType;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MainBundle\Service\FileUploader;


class SessionformationController extends Controller
{

    public function sessionAction(Request $request)
    {
        $formation = new Session_Formation();

        $form = $this->createForm(SessionformationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $formation->getImage();


            $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('image_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $formation->setImage($fileName);

            // ... persist the $product variable or any other work

            return $this->redirect($this->generateUrl('index'));
        }
        $em = $this->getDoctrine()->getEntityManager();

        $form = $em->getRepository('MainBundle:Session_Formation')->findAll();


        return $this->render('MainBundle:Elearning:sessionformation.html.twig', array(
            'form' => $form,
        ));
    }


    public function afficherAction()
    {


        $em = $this->getDoctrine()->getEntityManager();

        $form = $em->getRepository('MainBundle:Session_Formation')->findAll();


        return $this->render('MainBundle:Elearning:sessionformation.html.twig', array(
            'form' => $form,
        ));
    }

    public function inscriptionAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $particp=new Participersf();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $session= $em->getRepository('MainBundle:Participersf')->findOneBy(array('user'=>$user ->getId(),'sessionformation'=>$id));
        if($session)
        return $this->render('MainBundle:Elearning:session.html.twig', array(
            'response'=> false,
        ));
        else{
            $particp->setUser($user);


            $session= $em->getRepository('MainBundle:Session_Formation')->findOneBy(array('id'=>$id));
            $particp->setSessionformation($session);
            $particp->setStatus(0);
            $em->persist($particp);
            $em->flush();
            return $this->render('MainBundle:Elearning:session.html.twig', array(
                'response'=> true,
            ));
        }



    }
    public function displayAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        /**
         * @var $participersf Participersf
         */
        $participersf= $em->getRepository('MainBundle:Participersf')->findBy(array('user'=>$user ->getId()));
        return $this->render('MainBundle:Elearning:mysession.html.twig', array(
            'sessions'=> $participersf,
        ));
    }

}