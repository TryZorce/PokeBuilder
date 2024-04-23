<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TypeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $typeNames = [
            "Normal", "Fire", "Water", "Grass", "Electric",
            "Ice", "Fighting", "Poison", "Ground", "Flying",
            "Psychic", "Bug", "Rock", "Ghost", "Dragon",
            "Dark", "Steel", "Fairy"
        ];

        foreach ($typeNames as $typeName) {
            $type = new Type();
            $type->setName($typeName);
            $manager->persist($type);
        }

        $manager->flush();
    }
}
