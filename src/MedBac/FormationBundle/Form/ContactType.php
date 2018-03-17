<?php

namespace MedBac\FormationBundle\Form;
  
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;

class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array(
                'label_attr' => array('class' => 'col-md-4 control-label'),
         
                'attr' => array('class' => 'form-control input sm',
                    'placeholder' => 'Quel est votre nom',
                    'pattern'     => '.{2,}')))
            ->add('email', 'email', array(
            'label_attr' => array('class' => 'col-md-4 control-label'),
                'attr' => array(
        
            'class' => 'form-control input sm',
                    'placeholder' => 'pour vous répondre.')))
            ->add('subject', 'text', array(
                'label_attr' => array('class' => 'col-md-4 control-label'),
         
                'attr' => array('class' => 'form-control input sm',
                    'placeholder' => 'Le sujet de votre message.',
                    'pattern'     => '.{3,}' 
                )
            ))
            ->add('message', 'textarea', array(
                'label_attr' => array('class' => 'col-md-4 control-label'),
        
                'attr' => array('class' => 'form-control input sm',
                    'cols' => 170,
                    'rows' => 10,
                    'placeholder' => 'et ton message pour moi...'
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
  public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
         $resolver->setDefaults(array(
            'data_class' => 'MedBac\FormationBundle\Entity\Contact'
        ));
    }

    public function getName()
    {
        return 'medbac_formationbundle_contacttype';
    }
}

