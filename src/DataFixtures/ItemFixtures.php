<?php

namespace App\DataFixtures;

use App\Entity\Item;
use App\Entity\PokemonObject;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ItemFixtures extends AbstractFixtures
{
    public function load(ObjectManager $manager): void
    {
        $objects = [
            "Master Ball" => "A rare Poké Ball that can catch any Pokémon without fail.",
            "Ultra Ball" => "An improved Poké Ball that can catch Pokémon at a higher success rate than a Great Ball.",
            "Great Ball" => "A good, high-performance Poké Ball that provides a higher success rate than a standard Poké Ball.",
            "Poké Ball" => "A device for catching wild Pokémon. It's thrown like a ball at a Pokémon, comfortably encapsulating its target.",
            "Safari Ball" => "A special Poké Ball that is used only in the Safari Zone.",
            "Net Ball" => "A somewhat different Poké Ball that works especially well on Water- and Bug-type Pokémon.",
            "Dive Ball" => "A somewhat different Poké Ball that works especially well on Pokémon that live underwater.",
            "Nest Ball" => "A somewhat different Poké Ball that works especially well on weaker Pokémon in the wild.",
            "Repeat Ball" => "A somewhat different Poké Ball that works especially well on Pokémon species that have been caught before.",
            "Timer Ball" => "A somewhat different Poké Ball that becomes progressively better the more turns there are in a battle.",
            "Luxury Ball" => "A particularly comfortable Poké Ball that makes a wild Pokémon quickly grow friendlier after being caught.",
            "Premier Ball" => "A somewhat rare Poké Ball that was made as a commemorative item used to celebrate an event of some sort.",
            "Dusk Ball" => "A somewhat different Poké Ball that makes it easier to catch wild Pokémon at night or in dark places like caves.",
            "Heal Ball" => "A remedial Poké Ball that restores the HP of a Pokémon caught with it and eliminates any status conditions.",
            "Quick Ball" => "A somewhat different Poké Ball that has a more successful catch rate if used at the start of a wild encounter.",
            "Cherish Ball" => "A rare Poké Ball that has been crafted to commemorate a special occasion of some sort.",
            "Love Ball" => "A Poké Ball that works best when catching a Pokémon that is of the opposite gender of your Pokémon.",
            "Park Ball" => "A special Poké Ball for the Pal Park.",
            "Dream Ball" => "A special Poké Ball that appears in your Bag out of nowhere in the Entree Forest.",
            "Beast Ball" => "A special Poké Ball designed to catch Ultra Beasts.",
            "Terrain Extender" => "A very rare item that extends the duration of the terrain caused by the holder's move or Ability.",
            "Protective Pads" => "This item protects the holder from effects caused by making direct contact with the opponent.",
            "Electric Seed" => "A one-time use item that raises the holder's Defense stat in Electric Terrain.",
            "Psychic Seed" => "A one-time use item that raises the holder's Sp. Def stat in Psychic Terrain.",
            "Misty Seed" => "A one-time use item that raises the holder's Sp. Def stat in Misty Terrain.",
            "Grassy Seed" => "A one-time use item that raises the holder's Defense stat in Grassy Terrain.",
            "Full Incense" => "An item to be held by a Pokémon. It is an exotic-smelling incense that makes the holder bloated and slow moving.",
            "Lax Incense" => "An item to be held by a Pokémon. An exotic-smelling incense that may cause the foe to flinch when the holder is not holding it.",
            "Odd Incense" => "An item to be held by a Pokémon. An exotic-smelling incense that boosts the power of Psychic-type moves.",
            "Rock Incense" => "An item to be held by a Pokémon. An exotic-smelling incense that boosts the power of Rock-type moves.",
            "Full Heal" => "A spray-type medicine for treating status conditions.",
            "Lava Cookie" => "A local specialty of the Hoenn region. It can be used once to heal all the status conditions of a Pokémon.",
            "Old Gateau" => "A dessert called the Lone Eater's Choice. It can be used once to heal all the status conditions of a Pokémon.",
            "Casteliacone" => "A popular ice cream cone in the Unova region. It can be used once to heal all the status conditions of a Pokémon.",
            "Berry Juice" => "A 100% pure juice that restores HP by 20 points.",
            "Sacred Ash" => "Revives all fainted Pokémon and restores them to full HP.",
            "Leftovers" => "The holder restores 1/16 of its max HP at the end of each turn.",
            "Black Sludge" => "Restores 1/16 of the holder's max HP each turn if it's a Poison type or badly poisoned.",
            "Red Card" => "If the holder is hit by a move, it will switch out, and the Pokémon that damaged the holder will switch out.",
            "Eject Button" => "If the holder is hit by an attack, it will switch out with a party Pokémon.",
            "Rocky Helmet" => "Deals damage to the attacker on contact with a physical move.",
            "Wide Lens" => "An item to be held by a Pokémon. It's a magnifying lens that slightly boosts the accuracy of moves.",
            "Zoom Lens" => "An item to be held by a Pokémon. It's a magnifying lens that slightly boosts the accuracy of moves if the holder moves after the target.",
            "Choice Band" => "Raises Attack by 50%, but only allows the use of the first move selected.",
            "Choice Specs" => "Raises Special Attack by 50%, but only allows the use of the first move selected.",
            "Choice Scarf" => "Raises Speed by 50%, but only allows the use of the first move selected.",
            "Assault Vest" => "Raises the holder's Special Defense by 50%, but only allows the use of damaging moves.",
            "Focus Sash" => "If the holder has full HP and is hit by an attack that would cause fainting, it survives with 1 HP instead.",
            "Focus Band" => "The holder has a 10% chance of surviving an attack that would normally cause it to faint.",
            "Life Orb" => "Increases the power of moves by 30%, but causes the holder to lose 10% of its max HP after each successful attack.",
            "Expert Belt" => "Boosts the power of super-effective moves by 20%.",
            "Lagging Tail" => "An item to be held by a Pokémon. A held item that promotes evasion, but only allows the use of one kind of move.",
            "Quick Claw" => "An item to be held by a Pokémon. It allows the holder to move first occasionally.",
            "Luminous Moss" => "A one-time use item that raises the holder's Sp. Def stat if hit by a Water-type move.",
            "White Herb" => "Restores all lowered stat stages to normal if one is less than 0.",
            "Power Herb" => "A one-time use item that allows the holder to immediately use a move that requires charging.",
            "Binding Band" => "A held item that extends the duration of the move Bind and inflicts damage to the target every turn.",
            "Grip Claw" => "A held item that extends the duration of the move Bind and inflicts damage to the target every turn.",
            "Air Balloon" => "A held item that gives the holder immunity to Ground-type moves. Pops when holder is hit.",
            "Iron Ball" => "An item to be held by a Pokémon. It's a hard and heavy ball that drops the Speed stat of the holder.",
            "Ring Target" => "A held item that allows the holder's type to be hit by moves that would normally be not very effective.",
            "Eject Pack" => "A one-time use item that switches out the holder if it has its stats lowered.",
            "Room Service" => "A one-time use item that lowers the holder's Speed stat in Trick Room.",
            "Throat Spray" => "A one-time use item that raises the holder's Special Attack stat when hit by a special move.",
            "Heavy-Duty Boots" => "A held item that allows the holder to ignore the effects of entry hazards on the battlefield.",
            "Utility Umbrella" => "An item to be held by a Pokémon. It protects the holder from the effects of weather.",
            "Weakness Policy" => "Raises Attack and Special Attack by two stages each when hit by a super-effective move.",
            "Wise Glasses" => "An item to be held by a Pokémon. It's a thick pair of glasses that slightly boosts the power of special moves.",
        ];

        foreach ($objects as $objectName => $description) {
            $object = new Item();
            $object->setName($objectName);
            $object->setDescription($description);
            $manager->persist($object);
        }

        $manager->flush();
    }
}
