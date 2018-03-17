<?php

namespace MedBac\FormationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BijouType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',null, array(
        'label_attr' => array('class' => 'col-md-4 control-label'),
        'attr'       => array('class' => 'form-control input sm'),
    ))
            ->add('description','textarea', array(
        'label_attr' => array('class' => 'col-md-4 control-label'),
        'attr'       => array('class' => 'form-control input sm','rows' => '10','cols' => '10'),
    ))
            ->add('quantite',null, array(
        'label_attr' => array('class' => 'col-md-4 control-label'),
        'attr'       => array('class' => 'form-control input sm'),
    ))
            ->add('prix',null, array(
        'label_attr' => array('class' => 'col-md-4 control-label'),
        'attr'       => array('class' => 'form-control input sm'),
    ))
            ->add('file')
            ->add('listeDesGenres','entity', array(
               'class' => 'MedBacFormationBundle:Genre',
               'multiple' => true,
               'required' =>true,
               'label' => "Genre",
               'property' => 'libelle',
         
            ))
            
             
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MedBac\FormationBundle\Entity\Bijou'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'medbac_formationbundle_bijou';
    }
}
