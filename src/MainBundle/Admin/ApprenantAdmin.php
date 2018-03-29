<?php

namespace MainBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ApprenantAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('email')
            ->add('motPasse')
            ->add('nveauetude')
            ->add('telephone')
            ->add('dateNaissance')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('email')
            ->add('motPasse')
            ->add('nveauetude')
            ->add('telephone')
            ->add('dateNaissance')
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
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('email')
            ->add('motPasse')
            ->add('nveauetude')
            ->add('telephone')
            ->add('dateNaissance')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
            ->add('email')
            ->add('motPasse')
            ->add('nveauetude')
            ->add('telephone')
            ->add('dateNaissance')
        ;
    }
}
