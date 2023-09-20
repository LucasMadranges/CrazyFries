<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email', EmailType::class, [
            'label' => false,
            "attr" => [
                "class" => "form-control",
                'placeholder' => "Votre email",
            ]
        ])
        ->add('password', RepeatedType::class, [
            'type' => PasswordType::class,
            'first_options' => [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Votre mot de passe',
                ],
            ],
            'second_options' => [
                'label' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Confirmez votre mot de passe',
                ],
            ]
        ])
            ->add('submit', SubmitType::class, [
                "label" => "S'inscrire",
                "attr" => [
                    "class" => "btn btn-primary btn-lg"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
