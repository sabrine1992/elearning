<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 30/05/2018
 * Time: 16:06
 */

namespace MainBundle\Form;

use MainBundle\Entity\cours;
use MainBundle\Entity\Formation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sonata\AdminBundle\Form\Type\ModelType;

class CoursType   extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file',FileType::class, array('label' => 'Cours (PDF)','attr'=>array('accept'=>'.pdf')))

            ->add('titreFormation',TextType::class,array('label' => 'Chapitre '))
            ->add('formation', EntityType::class, [
                'class' => Formation::class,
                'choice_label' => 'titre',
                'expanded'=>false,
                'multiple'=>false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => cours::class,
        ));
    }


}