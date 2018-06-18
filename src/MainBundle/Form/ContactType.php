<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 30/05/2018
 * Time: 16:06
 */

namespace MainBundle\Form;

use MainBundle\Entity\contact;
use MainBundle\Entity\cours;
use MainBundle\Entity\Formation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType   extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('label' => 'Nom && Prenom','attr' => array('placeholder' => 'SVP tapez votre nom et prenom'),
                'constraints' => array(
                    new NotBlank(array("message" => "Please provide your name")),)))

            ->add('email', EmailType::class, array('label' => 'Email','attr' => array('placeholder' => 'SVP tapez votre adresse email'),
                'constraints' => array(
                    new NotBlank(array("message" => "Please provide a valid email")),
                    new Email(array("message" => "Your email doesn't seems to be valid")),
                )
            ))
        ->add('message', TextareaType::class, array('label' => 'Message','attr' => array('class' => 'form-control','placeholder' => 'SVP taper votre message'),
        'constraints' => array(
            new NotBlank(array("message" => "Please provide a message here")),
        )
    ))
    ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => contact::class,
        ));
    }
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'error_bubbling' => true
        ));
    }

}