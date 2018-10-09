<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/inscription", name="Inscription")
     */
    public function index()
    {
        $user = new User();



        $form = $this->createFormBuilder($user)
            ->add('firstname', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('email', EmailType::class )
            ->add('password', PasswordType::class, [
                'label' => 'Mot de Passe'
            ])
            ->add('submit', SubmitType::class, array('label' => 'Inscription'))
            ->getForm();


        return $this->render('users/Registration.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
