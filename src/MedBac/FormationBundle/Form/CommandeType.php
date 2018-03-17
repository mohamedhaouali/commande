<?php

namespace MedBac\FormationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateCommande',  'date', array(
       'widget' => 'single_text',
    'format' => 'yyyy-MM-dd',
        'label_attr' => array('class' => 'col-md-4 control-label'),
                'attr'       => array('class' => 'form-control input sm'),
     ))
            ->add('quantite',null, array(
        'label_attr' => array('class' => 'col-md-4 control-label'),
        'attr'       => array('class' => 'form-control input sm'),
    ))
           
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MedBac\FormationBundle\Entity\Commande'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'medbac_formationbundle_commande';
    }
}
