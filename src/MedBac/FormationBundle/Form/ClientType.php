<?php

namespace MedBac\FormationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType;

class ClientType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',null, array(
        'label_attr' => array('class' => 'col-md-4 control-label'),
        'attr'       => array('class' => 'form-control input sm'),
    ))
            ->add('prenom',null, array(
        'label_attr' => array('class' => 'col-md-4 control-label'),
        'attr'       => array('class' => 'form-control input sm'),
    ))
            ->add('adresse',null, array(
        'label_attr' => array('class' => 'col-md-4 control-label'),
        'attr'       => array('class' => 'form-control input sm'),
    ))
            ->add('telephone',null, array(
        'label_attr' => array('class' => 'col-md-4 control-label'),
        'attr'       => array('class' => 'form-control input sm'),
    ))
            ->add('user',new RegistrationFormType("\MedBac\UserBundle\Entity\User"))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MedBac\FormationBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'medbac_formationbundle_client';
    }
}
