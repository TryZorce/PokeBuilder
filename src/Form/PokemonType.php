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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\Range;

class PokemonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('level', IntegerType::class, [
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                    new Range(['min' => 1]),
                ],
            ])
            ->add('nickname', null, [
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'email',
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('item', EntityType::class, [
                'class' => Item::class,
                'choice_label' => 'name',
                'required' => false,
            ])
            ->add('species', EntityType::class, [
                'class' => Species::class,
                'choice_label' => 'name',
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('ability', EntityType::class, [
                'class' => Ability::class,
                'choice_label' => 'name',
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('moveset', EntityType::class, [
                'class' => Moveset::class,
                'choice_label' => 'name',
                'multiple' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                    new Count(['min' => 1, 'max' => 4]),
                ],
            ])
            ->add('type', EntityType::class, [
                'class' => Type::class,
                'choice_label' => 'name',
                'multiple' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                    new Count(['min' => 1, 'max' => 2]),
                ],
            ])
            ->add('teams', EntityType::class, [
                'class' => Team::class,
                'choice_label' => 'name',
                'multiple' => true,
                'required' => false,
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