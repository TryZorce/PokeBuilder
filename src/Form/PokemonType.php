<?php

namespace App\Form;

use App\Entity\Ability;
use App\Entity\Item;
use App\Entity\Moveset;
use App\Entity\Pokemon;
use App\Entity\Species;
use App\Entity\Team;
use App\Entity\Type;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PokemonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('level')
            ->add('nickname')
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ->add('item', EntityType::class, [
                'class' => Item::class,
                'choice_label' => 'id',
            ])
            ->add('species', EntityType::class, [
                'class' => Species::class,
                'choice_label' => 'id',
            ])
            ->add('ability', EntityType::class, [
                'class' => Ability::class,
                'choice_label' => 'id',
            ])
            ->add('moveset', EntityType::class, [
                'class' => Moveset::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('type', EntityType::class, [
                'class' => Type::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('teams', EntityType::class, [
                'class' => Team::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pokemon::class,
        ]);
    }
}
