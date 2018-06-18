<?php


namespace UserBundle\Form;


use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use UserBundle\Entity\User;


class RegistrationType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('prenom', TextType::class)
            ->add('sexe', 'choice', array('choices' => array('Femme' => 'Féminin', 'Homme' => 'Masculin'),'expanded'  => false,
                'multiple'  => true))
            ->add('adresse', TextType::class)
            ->add('Telephone', TextType::class)
            ->add('DateNaissance', 'birthday')
            ->add('sexe', 'choice', array('choices' => array('Femme' => 'Féminin', 'Homme' => 'Masculin')))
            ->add('type', 'choice', array('choices' => array('Formateur' => '0', 'Apprenant' => '1'),
                'expanded'  => true,
                'multiple'  => false))
            ->add('diplome', TextType::class)
            ->add('Niveau_Etude', TextType::class)
            ->add('Specialite', textType::class);

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User',
        ));


    }

    /**
     * Sets the default options for this type.
     *
     * @param OptionsResolverInterface $resolver The resolver for the options.
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        // TODO: Implement setDefaultOptions() method.
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return null;
    }

}