<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class SearchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('search_text', TextType::class, array(
            'label'=>'Search',
        ));

        $builder->add('search_btn', SubmitType::class, array(
            'label'=>'Search Item',
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }
}
