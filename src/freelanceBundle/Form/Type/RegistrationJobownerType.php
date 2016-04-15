<?php

namespace freelanceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationJobownerType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('firstname')
                ->add('lastname');
        }           

    public function getParent() {
        return 'fos_user_registration';
    }

    public function getName() {
        return 'jobowner_user_registration';
    }

}
