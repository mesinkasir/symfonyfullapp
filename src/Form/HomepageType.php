<?php

namespace App\Form;

use App\Entity\Homepage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomepageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('decription')
            ->add('cover')
            ->add('section1title')
            ->add('section1cover')
            ->add('section1content')
            ->add('section2title')
            ->add('section2cover')
            ->add('section2content')
            ->add('footer')
            ->add('footercover')
            ->add('footercontent')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Homepage::class,
        ]);
    }
}
