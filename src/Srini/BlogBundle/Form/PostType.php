<?php

namespace Srini\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PostType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('body')
            ->add('date_added')
        ;
    }

    public function getName()
    {
        return 'srini_blogbundle_posttype';
    }
}
