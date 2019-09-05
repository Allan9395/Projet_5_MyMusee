<?php

namespace App\Form;

use App\Entity\Museums;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MuseumsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom_Officiel')
            ->add('Themes')
            ->add('Artiste')
            ->add('Personnage_Phare')
            ->add('Histoire')
            ->add('Protection_batiment')
            ->add('Protection_Espace')
            ->add('Adresse')
            ->add('Departement')
            ->add('Ville')
            ->add('Code_Postal')
            ->add('Telephone')
            ->add('URL')
            ->add('geolocalisation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Museums::class,
        ]);
    }
}