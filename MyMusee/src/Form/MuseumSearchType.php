<?php

namespace App\Form;

use App\Entity\MuseumSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class MuseumSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('region', ChoiceType::class, [
                'choices' => [
                    'Auvergne-Rhône-Alpes' => 'Auvergne-Rhône-Alpes',
                    'Bourgogne-Franche-Comté' => 'Bourgogne-Franche-Comté',
                    'Bretagne' => 'Bretagne',
                    'Centre-Val de Loire' => 'Centre-Val de Loire',
                    'Corse' => 'Corse',
                    'Grand Est' => 'Grand Est',
                    'Hauts-de-France' => 'Hauts-de-France',
                    'Île-de-France' => 'Île-de-France',
                    'Normandie' => 'Normandie',
                    'Nouvelle-Aquitaine' => 'Nouvelle-Aquitaine',
                    'Occitanie' => 'Occitanie',
                    'Pays-de-la-Loire' => 'Pays-de-la-Loire',
                    'Provence-Alpes-Côte d\'Azur' => 'Provence-Alpes-Côte d\'Azur',
                    'Auvergne-Rhône-Alpes' => 'Auvergne-Rhône-Alpes',
                    'Auvergne-Rhône-Alpes' => 'Auvergne-Rhône-Alpes',
                ],
                'required' => false,
                'label' => false,
                'placeholder' => 'Régions'
            ])
            ->add('departement', ChoiceType::class, [
                'choices' => [
                    'Ain' => 'Ain',
                    'Aisne' => 'Aisne',
                    'Allier' => 'Allier',
                    'Alpes-de-Haute-Provence ' => 'Alpes-de-Haute-Provence ',
                    'Alpes-de-Haute-Provence ' => 'Alpes-de-Haute-Provence ',
                    'Alpes-maritimes' => 'Alpes-maritimes',
                    'Ardèche' => 'Ardèche',
                    'Ardennes' => 'Ardennes',
                    'Ariège' => 'Ariège',
                    'Aube' => 'Aube',
                    'Aude' => 'Aude',
                    'Aveyron' => 'Aveyron',
                    'Bouches-du-Rhône' => 'Bouches-du-Rhône',
                    'Calvados' => 'Calvados',
                    'Cantal' => 'Cantal',
                    'Charente' => 'Charente',
                    'Charente-maritime' => 'Charente-maritime',
                    'Cher' => 'Cher',
                    'Corrèze' => 'Corrèze',
                    'Corse-du-sud' => 'Corse-du-sud',
                    'Haute-Corse' => 'Haute-Corse',
                    'Côte-d\'Or' => 'Côte-d\'Or',
                    'Côtes-d\'Armor ' => 'Côtes-d\'Armor ',
                    'Creuse' => 'Creuse',
                    'Dordogne' => 'Dordogne',
                    'Doubs' => 'Doubs',
                    'Drôme' => 'Drôme',
                    'Eure' => 'Eure',
                    'Eure-et-loir' => 'Eure-et-loir',
                    'Finistère' => 'Finistère',
                    'Gard' => 'Gard',
                    'Haute-garonne' => 'Haute-garonne',
                    'Gers' => 'Gers',
                    'Gironde' => 'Gironde',
                    'Hérault' => 'Hérault',
                    'Ille-et-vilaine' => 'Ille-et-vilaine',
                    'Indre' => 'Indre',
                    'Indre-et-loire' => 'Indre-et-loire',
                    'Isère' => 'Isère',
                    'Jura' => 'Jura',
                    'Landes' => 'Landes',
                    'Loir-et-cher' => 'Loir-et-cher',
                    'Loire' => 'Loire',
                    'Haute-loire' => 'Haute-loire',
                    'Loire-atlantique' => 'Loire-atlantique',
                    'Loiret' => 'Loiret',
                    'Lot' => 'Lot',
                    'ALot-et-garonnein' => 'Lot-et-garonne',
                    'Lozère' => 'Lozère',
                    'Maine-et-loire' => 'Maine-et-loire',
                    'Manche' => 'Manche',
                    'Marne' => 'Marne',
                    'Haute-marne' => 'Haute-marne',
                    'Mayenne' => 'Mayenne',
                    'Meurthe-et-moselle ' => 'Meurthe-et-moselle ',
                    'Meuse' => 'Meuse',
                    'Morbihan' => 'Morbihan',
                    'Moselle' => 'Moselle',
                    'Nièvre' => 'Nièvre',
                    'Nord' => 'Nord',
                    'Oise' => 'Oise',
                    'Orne' => 'Orne',
                    'Pas-de-calais' => 'Pas-de-calais',
                    'Puy-de-dôme' => 'Puy-de-dôme',
                    'Pyrénées-atlantiques' => 'Pyrénées-atlantiques',
                    'Hautes-Pyrénées ' => 'Hautes-Pyrénées ',
                    'Pyrénées-orientales' => 'Pyrénées-orientales',
                    'Bas-rhin' => 'Bas-rhin',
                    'Haut-rhin' => 'Haut-rhin',
                    'Rhône' => 'Rhône',
                    'Haute-saône' => 'Haute-saône',
                    'Saône-et-loire' => 'Saône-et-loire',
                    'Sarthe' => 'Sarthe',
                    'Savoie' => 'Savoie',
                    'Haute-savoie' => 'Haute-savoie',
                    'Paris' => 'Paris',
                    'Seine-maritime' => 'Seine-maritime',
                    'Seine-et-marne' => 'Seine-et-marne',
                    'Yvelines' => 'Yvelines',
                    'Deux-sèvres' => 'Deux-sèvres',
                    'Somme' => 'Somme',
                    'Tarn' => 'Tarn',
                    'Tarn-et-garonne' => 'Tarn-et-garonne',
                    'Var' => 'Var',
                    'Vaucluse' => 'Vaucluse',
                    'Vendée' => 'Vendée',
                    'Vienne' => 'Vienne',
                    'Haute-vienne' => 'Haute-vienne',
                    'Vosges' => 'Vosges',
                    'Yonne' => 'Yonne',
                    'Territoire de belfort' => 'Territoire de belfort',
                    'Essonne' => 'Essonne',
                    'Hauts-de-seine' => 'Hauts-de-seine',
                    'Seine-Saint-Denis' => 'Seine-Saint-Denis',
                    'Val-de-marne' => 'Val-de-marne',
                    'Val-d\'oise' => 'Val-d\'oise',
                    'Guadeloupe' => 'Guadeloupe',
                    'Martinique' => 'Martinique',
                    'Guyane' => 'Guyane',
                    'La réunion' => 'La réunion',
                    'Mayotte' => 'Ain',
                ],
                'required' => false,
                'label' => false,
                'placeholder' => 'Départements'
            ])

            ->add('ville', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Villes'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MuseumSearch::class,
            'method' => 'get',
            'csrf_protection' => false,
        ]);
    }

    // Permet de retirer le prefix (longue Url)
    public function getBlockPrefix()
    {
        return '';
    }
}
