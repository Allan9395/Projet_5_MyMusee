<?php

namespace App\Form;



use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;



class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('firstname', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Prénom'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Nom'
                ]
            ])

            ->add('phone', TextType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Tèlephone'
                ]
            ])

            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Email'
                ]
            ])
            
            ->add('messagesubject', ChoiceType::class, [
                'choices' => [
                    'Demande' => 'Demande',
                    'Proposition' => 'Proposition',
                    'Suggestion' => 'Suggestion',
                    'Autre' => 'Autre'
                ],
                'data' => 'Demande',
                'label' => false,
                'attr' => [
                    'placeholder' => 'Le sujet du message'
                ]
            ])

            ->add('message', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Votre Message'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,

        ]);
    }
}