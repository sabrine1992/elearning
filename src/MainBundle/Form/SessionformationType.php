<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 16/05/2018
 * Time: 20:08
 */

namespace MainBundle\Form;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use MainBundle\Entity\Formation;
use MainBundle\Entity\Session_Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use UserBundle\Entity\User;

class SessionformationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('image', FileType::class, array('label' => 'image (jpeg image)'))
            ->add('dateDebut')
            ->add('dateFin')
            ->add('Formateur',ModelType::class, [
                'class' => User::class,
                'property' => 'username',
            ])
            ->add('formation',ModelType::class, [
        'class' => Formation::class,
        'property' => 'titre',
    ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Session_Formation::class,
        ));
    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('image',SessionformationType::class, [
                'delete' => false
            ])



        ;
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Formation',
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'formation';
    }
    public function __toString()
    {
        return (string) $this->titre();
    }

}