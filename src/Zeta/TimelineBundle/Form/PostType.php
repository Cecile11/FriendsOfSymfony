<?php

namespace Zeta\TimelineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                ->add('text', 'textarea')
//                ->add('image', 'file')
                ->add('image', 'file', array('data_class' => null,'required' => false))
                ->getForm();
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Zeta\TimelineBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'zeta_timelinebundle_post';
    }

}
