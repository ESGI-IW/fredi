<?php

namespace fredi\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, array(
                'placeholder' => array(
                'year' => 'Year', 'month' => 'Month', 'day' => 'Day')))
            ->add('reason', TextType::class)
            ->add('journey', TextType::class)
            ->add('km', IntegerType::class)
            ->add('journeyCost', IntegerType::class)
            ->add('toll', IntegerType::class)
            ->add('meal', IntegerType::class)
            ->add('accommodation', IntegerType::class)
            ->add('total', IntegerType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fredi\AppBundle\Entity\Cost'
        ));
    }
}
