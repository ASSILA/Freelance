<?php

namespace freelanceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('title')
                ->add('description')
                ->add('category','choice', [
                    'choices' => [
                        'Mobile' => [
                            'Android' => 'Android',
                            'JavaMe' => 'JavaMe',
                        ],
                        'Web' => [
                            'CMS' => 'CMS',
                            'Application' => 'Application',
                            'Personal WebSite' => 'Personal WebSite',
                        ]
        ]]);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'freelanceBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'freelancebundle_project';
    }

}
