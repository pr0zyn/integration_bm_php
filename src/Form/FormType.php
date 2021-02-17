<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        define('PRICE', 1000);
        $builder
            ->add('price',MoneyType::class, array('data' => PRICE, 'currency' => 'PLN', 'attr' =>['readonly' => true]) )
            ->add('Buy', SubmitType::class)
        ;
    }


}
