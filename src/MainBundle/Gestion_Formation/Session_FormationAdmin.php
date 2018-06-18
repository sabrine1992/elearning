<?php
namespace MainBundle\Gestion_Formation;


use MainBundle\Entity\Formation;
use MainBundle\Form\FormationType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use UserBundle\Entity\User;

class Session_FormationAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('image')
            ->add('Formateur')
            ->add('formation')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('image')
            ->add('Formateur')
            ->add('formation')
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
     *
     */

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('dateDebut')
            ->add('dateFin')
            ->add('Formateur',ModelType::class, [
                'class' => User::class,
                'property' => 'username',
            ])
            ->add('formation', ModelType::class, [
                 'class' => Formation::class,
                 'property' => 'titre',
                 ])
            ->add('image', FileType::class, array('data_class' => null))


        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('image')
            ->add('Formateur')
            ->add('formation')

        ;
    }
}
