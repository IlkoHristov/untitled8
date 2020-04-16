<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class clientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('client', ChoiceType::class,[
            'choices'=>
            [
                ''=>null,
                'Client A'=>'Client A',
                'Client B'=>'Client B',
                'Client C'=>'Client C'
            ],
            'choices_as_values' => true,
        ])->
        add('matter')
            ->add('issuer', ChoiceType::class,[
                'choices'=>
                [
                    ''=>null,
                    'Atanas Mihnev'=>'Atanas Mihnev',
                    'Elvis Metodiev'=>'Elvis Metodiev',
                    'Ilko Hristov'=>'Ilko Hristov'
                ]
            ])->
        add('language')->
        add('currency', ChoiceType::class,[
            'choices'=>[
                ''=>null,
                'Euro'=>'Euro',
                'USD'=>'USD'
            ]
            ])->
        add('invoice')->
        add('date')->
        add('amount')->
        add('discount')->
        add('vat');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_client';
    }


}
