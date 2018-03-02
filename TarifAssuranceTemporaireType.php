<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TarifAssuranceTemporaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateVig', 'text', array(
                    'label' => 'dateVig',
                    'attr' => array(
                        'class' => 'form-control'
                    ),
                ))
            ->add('tauxAssuranceTemporaire', 'text', array(
                    'label' => 'tauxAssuranceTemporaire',
                    'attr' => array(
                        'class' => 'form-control'
                    ),
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\TarifAssuranceTemporaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mainbundle_tarifassurancetemporaire';
    }
}
