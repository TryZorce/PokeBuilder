<?php

namespace App\DataFixtures;

use App\Entity\Pokemon;
use App\Entity\Item;
use App\Entity\Moveset;
use App\Entity\Type;
use App\Entity\User;
use App\Entity\Species;
use App\Entity\Ability;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker\Factory;

class PokemonFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        $speciesRepository = $manager->getRepository(Species::class);
        $speciesList = $speciesRepository->findAll();

        $abilityRepository = $manager->getRepository(Ability::class);
        $abilitiesList = $abilityRepository->findAll();

        $itemRepository = $manager->getRepository(Item::class);
        $itemList = $itemRepository->findAll();

        $userRepository = $manager->getRepository(User::class);
        $userList = $userRepository->findAll();

        $movesetRepository = $manager->getRepository(Moveset::class);
        $movesetList = $movesetRepository->findAll();

        $typeRepository = $manager->getRepository(Type::class);
        $typeList = $typeRepository->findAll();

        $pokemonCount = 0;

        foreach ($speciesList as $species) {
            if ($pokemonCount >= 40) {
                break;
            }

            $pokemon = new Pokemon();
            $pokemon->setSpecies($species);

            $randomAbility = $abilitiesList[array_rand($abilitiesList)];
            $pokemon->setAbility($randomAbility);

            $randomItem = $itemList[array_rand($itemList)];
            $pokemon->setItem($randomItem);

            $randomUser = $userList[array_rand($userList)];
            $pokemon->setUser($randomUser);

            $numberOfMovesets = $faker->numberBetween(1, 4);
            $randomMovesets = $faker->randomElements($movesetList, $numberOfMovesets);
            foreach ($randomMovesets as $moveset) {
                $pokemon->addMoveset($moveset);
            }

            $numberOfTypes = $faker->numberBetween(1, 2);
            $randomTypes = $faker->randomElements($typeList, $numberOfTypes);
            foreach ($randomTypes as $type) {
                $pokemon->addType($type);
            }

            $pokemon->setNickname($faker->firstName);
            $pokemon->setLevel($faker->numberBetween(1, 100));

            $manager->persist($pokemon);

            $pokemonCount++;
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            AbilityFixtures::class,
        ];
    }
}
