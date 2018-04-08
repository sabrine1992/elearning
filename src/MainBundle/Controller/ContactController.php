<?php


namespace MainBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

use MainBundle\Entity\Contact;


class ContactController extends Controller
{

    /**
     * @param Request $request
     */
    public function contacterAction(Request $request)
    {
        $contact = new Contact;

        # Add form fields
        $form = $this->createFormBuilder($contact)
            ->add('name', TextType::class, array('label' => 'name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('email', TextType::class, array('label' => 'email', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('message', TextareaType::class, array('label' => 'message', 'attr' => array('class' => 'form-control')))
            ->add('Save', SubmitType::class, array('label' => 'submit', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-top:15px')))
            ->getForm();

        # Handle form response
        $form->handleRequest($request);


# check if form is submitted

        if ($form->isSubmitted() && $form->isValid()) {
            $name = $form['name']->getData();
            $email = $form['email']->getData();
            $message = $form['message']->getData();

            # set form data

            $contact->setName($name);
            $contact->setEmail($email);
            $contact->setMessage($message);

            # finally add data in database

            $sn = $this->getDoctrine()->getManager();
            $sn->persist($contact);
            $sn->flush();

# check if form is submitted

            if ($form->isSubmitted() && $form->isValid()) {
                $name = $form['name']->getData();
                $email = $form['email']->getData();

                $message = $form['message']->getData();

                # set form data

                $contact->setName($name);
                $contact->setEmail($email);

                $contact->setMessage($message);

                # finally add data in database

                $sn = $this->getDoctrine()->getManager();
                $sn->persist($contact);
                $sn->flush();

$message = \Swift_Message::newInstance()
    ->setFrom('sabrine.njoumi12@gmail.com')
    ->setTo($email)
    ->setBody($this->renderView('default/sendemail.html.twig',array('name' => $name)),'text/html');
$this->get('mailer')->send($message);
            }
        }
    }
}
