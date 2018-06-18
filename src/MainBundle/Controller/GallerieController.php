<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 05/06/2018
 * Time: 01:38
 */

namespace MainBundle\Controller;

use MainBundle\Entity\Gallerie;
use MainBundle\Form\GallerieType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MainBundle\Service\FileUploader;
class GallerieController  extends Controller
{


    public function gallerieAction(Request $request)
    {
        $formation = new Gallerie();

        $form = $this->createForm(GallerieType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $formation->getImage();


            $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('gallerie_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $formation->setImage($fileName);

            // ... persist the $product variable or any other work

            return $this->redirect($this->generateUrl('gallerie'));
        }
        $em = $this->getDoctrine()->getEntityManager();

        $form = $em->getRepository('MainBundle:Gallerie')->findAll();


        return $this->render('MainBundle:Elearning:gallerie.html.twig', array(
            'form' => $form,
        ));
    }



    public  function affichergallerieAction()
    {


        $em = $this->getDoctrine()->getEntityManager();

        $form = $em->getRepository('MainBundle:Gallerie')->findAll();


        return $this->render('MainBundle:Elearning:gallerie.html.twig', array(
            'form' => $form,
        ));
    }

}