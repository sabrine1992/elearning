<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 30/05/2018
 * Time: 16:06
 */

namespace MainBundle\Form;

use MainBundle\Entity\Participersf;
use MainBundle\Entity\Session_Formation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sonata\AdminBundle\Form\Type\ModelType;
use UserBundle\Entity\User;

class ParticipersfType   extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status')

            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
                'expanded'=>false,
                'multiple'=>false
            ])
            ->add('sessionformation', EntityType::class, [
                'class' => Session_Formation::class,
                'choice_label' => 'id',
                'expanded'=>false,
                'multiple'=>false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Participersf::class,
        ));
    }



}