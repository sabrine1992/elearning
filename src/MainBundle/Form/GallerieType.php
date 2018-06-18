<?php
/**
 * Created by PhpStorm.
 * User: sabine
 * Date: 16/05/2018
 * Time: 20:08
 */

namespace MainBundle\Form;


use MainBundle\Entity\Gallerie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class GallerieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('image', FileType::class, array('label' => 'image (jpeg image)'))
            ->add('Titre')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Gallerie::class,
        ));
    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('image', GallerieType::class, [
                'delete' => false
            ])



        ;
    }
}