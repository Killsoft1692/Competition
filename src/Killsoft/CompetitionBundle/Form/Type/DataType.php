<?php

namespace Killsoft\CompetitionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class DataType
 * @package Killsoft\CompetitionBundle\Form\Type
 */
class DataType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('male', 'text')
            ->add('female', 'text')
            ->add('date1', 'date', array(
                'years' => range(1950, 2100)
            ))
            ->add('date2', 'date', array(
                'years' => range(1950, 2100)
            ))
            ->add('save', 'submit', array(
                'label' => 'try'
            ))
            ->getForm();
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data class' => 'Killsoft\CompetitionBundle\Entity\Data'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'main_form';
    }
}
