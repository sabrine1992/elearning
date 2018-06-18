<?php

namespace MainBundle\Gestion_Formation;

use MainBundle\Entity\Formation;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class FormationAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('image')
            ->add('titre')
            ->add('description')
            ->add('objectif')
            ->add('programme')
            ->add('Prix')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('image')
            ->add('titre')
            ->add('description')
            ->add('objectif')
            ->add('programme')
            ->add('Prix')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                ),
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('titre','textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('objectif','textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('programme','textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('formateur')
            ->add('Prix','textarea', array('attr' => array('class' => 'ckeditor')))

            ->add('image', FileType::class, array('data_class' => null))



            ->add('description','textarea', array('attr' => array('class' => 'ckeditor')))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('image')
            ->add('titre')
            ->add('description')
            ->add('objectif')
            ->add('programme')
            ->add('Prix')
        ;
    }


}
