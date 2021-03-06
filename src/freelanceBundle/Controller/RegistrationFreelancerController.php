<?php

namespace freelanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationFreelancerController extends Controller
{
    public function registerAction()
    {
        return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('freelanceBundle\Entity\Freelancer');
    }
}