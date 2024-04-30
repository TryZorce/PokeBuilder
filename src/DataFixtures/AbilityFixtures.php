<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Ability;

class AbilityFixtures extends AbstractFixtures
{
    public function load(ObjectManager $manager): void
    {
        $abilities = [
            "Water Absorb" => "Restores HP if hit by a Water-type move.",
            "Misty Surge" => "The field becomes Misty Terrain when the Pokémon enters battle.",
            "Soundproof" => "Gives full immunity to all sound-based moves.",
            "Unnerve" => "Makes the foe nervous and unable to eat Berries.",
            "Air Lock" => "Eliminates the effects of weather.",
            "Snow Warning" => "The Pokémon summons a hailstorm when it enters a battle.",
            "Powers Up Party" => "Powers up moves if they become critical hits when attacking.",
            "Analytic" => "Powers up moves when the Pokémon moves last.",
            "Anticipation" => "Senses a foe's dangerous moves.",
            "Battle Armor" => "The Pokémon is protected against critical hits.",
            "Aura Break" => "The effects of Aura Abilities are reversed to lower the power of affected moves.",
            "Dark Aura" => "The Pokémon's Dark Aura powers up Dark-type moves for itself and its allies.",
            "Sand Stream" => "The Pokémon summons a sandstorm in battle.",
            "Cheek Pouch" => "Restores HP as well when the Pokémon eats a Berry.",
            "Slush Rush" => "Boosts the Pokémon's Speed stat in a hailstorm.",
            "Surge Surfer" => "Doubles the Pokémon's Speed stat on Electric Terrain.",
            "Defiant" => "Boosts the Pokémon's Attack stat sharply when its stats are lowered.",
            "Fluffy" => "Halves the damage taken from moves that make direct contact, but doubles that of Fire-type moves.",
            "Gulp Missile" => "When the Pokémon uses Surf or Dive, it will come back with prey.",
            "Intimidate" => "The Pokémon intimidates opposing Pokémon upon entering battle, lowering their Attack stat.",
            "Aerilate" => "Normal-type moves become Flying-type moves.",
            "Thick Fat" => "The Pokémon is protected by a layer of thick fat, which halves the damage taken from Fire- and Ice-type moves.",
            "Magma Armor" => "Prevents the Pokémon from becoming frozen.",
            "Cursed Body" => "May disable a move used on the Pokémon.",
            "Immunity" => "Prevents the Pokémon from getting poisoned.",
            "Natural Cure" => "All status conditions heal when the Pokémon switches out.",
            "Synchronize" => "Passes a burn, poison, or paralysis to the foe.",
            "Leaf Guard" => "Prevents status conditions in sunny weather.",
            "Sheer Force" => "Removes additional effects to increase the power of moves.",
            "Swift Swim" => "Boosts the Pokémon's Speed stat in rain.",
            "Mold Breaker" => "Moves can be used on the target regardless of its Abilities.",
            "Flame Body" => "Contact with the Pokémon may burn the attacker.",
            "Download" => "Adjusts power according to the foe's lowest defensive stat.",
            "Static" => "Contact with the Pokémon may cause paralysis.",
            "Shield Dust" => "Blocks the added effects of attacks taken.",
            "Wonder Guard" => "Only supereffective moves will hit.",
            "Pressure" => "The Pokémon raises the foe's PP usage.",
            "Effect Spore" => "Contact may paralyze, poison, or cause sleep.",
            "Levitate" => "By floating in the air, the Pokémon receives full immunity to all Ground-type moves.",
            "Oblivious" => "Prevents the Pokémon from becoming infatuated.",
            "Cute Charm" => "Contact with the Pokémon may cause infatuation.",
            "Anger Point" => "Maxes Attack after taking a critical hit.",
            "Forewarn" => "The Pokémon can sense an opposing Pokémon's dangerous moves.",
            "Hyper Cutter" => "The Pokémon's proud of its powerful pincers. They prevent other Pokémon from lowering its Attack stat.",
            "Dry Skin" => "Restores HP in rain or when hit by Water-type moves. Reduces HP in harsh sunlight, and increases the damage received from Fire-type moves.",
            "Innards Out" => "Deals damage when defeated.",
            "Lightning Rod" => "Draws in all Electric-type moves to up Sp. Attack.",
            "Sand Veil" => "Boosts the Pokémon's evasion in a sandstorm.",
            "Bulletproof" => "Protects the Pokémon from some ball and bomb moves.",
            "Water Veil" => "Prevents the Pokémon from getting a burn.",
            "Stench" => "The stench may cause the target to flinch.",
            "Pickup" => "The Pokémon may pick up items.",
            "Klutz" => "The Pokémon can't use any held items.",
            "Snow Cloak" => "Boosts evasion in a hailstorm.",
            "Gluttony" => "Encourages the early use of a held Berry.",
            "Torrent" => "Powers up Water-type moves in a pinch.",
            "Iron Fist" => "Powers up punching moves.",
            "Damp" => "Prevents combatants from self destructing.",
            "Sticky Hold" => "Protects the Pokémon from item theft.",
            "Arena Trap" => "Prevents opposing Pokémon from fleeing.",
            "Vital Spirit" => "Prevents the Pokémon from falling asleep.",
            "White Smoke" => "Prevents the Pokémon's stats from being lowered.",
            "Cloud Nine" => "Eliminates the effects of weather.",
            "Suction Cups" => "Negates all moves that force switching out.",
            "Illuminate" => "Raises the likelihood of meeting wild Pokémon.",
            "Shadow Tag" => "Prevents opposing Pokémon from escaping.",
            "Magnet Pull" => "Prevents Steel-type Pokémon from escaping.",
            "Keen Eye" => "Keeps accuracy from being lowered.",
            "Insomnia" => "Prevents the Pokémon from falling asleep.",
            "Tangled Feet" => "Raises evasion if the Pokémon is confused.",
            "Frisk" => "Reveals the foe’s held item.",
            "Sturdy" => "The Pokémon is protected against 1-hit KO attacks.",
            "Run Away" => "Enables a sure getaway from wild Pokémon.",
            "Adaptability" => "Powers up moves of the same type as the Pokémon.",
            "Skill Link" => "Increases the frequency of multi-strike moves.",
            "Chlorophyll" => "Boosts the Pokémon's Speed stat in sunshine.",
            "Pickpocket" => "Steals an item from an attacker that made direct contact.",
            "Flash Fire" => "Powers up Fire-type moves if it's hit by one.",
            "Inner Focus" => "The Pokémon's intensely focused, and that protects the Pokémon from flinching.",
            "Motor Drive" => "Boosts its Speed stat if hit by an Electric-type move, instead of taking damage.",
            "Rivalry" => "Becomes competitive and deals more damage to Pokémon of the same gender, but deals less to Pokémon of the opposite gender.",
            "Volt Absorb" => "Restores HP if hit by an Electric-type move, instead of taking damage.",
            "Justified" => "Being hit by a Dark-type move boosts the Attack stat of the Pokémon, for justice.",
            "Drizzle" => "The Pokémon makes it rain if it appears in battle.",
            "Water Bubble" => "Lowers the power of Fire-type moves done to the Pokémon and prevents the Pokémon from getting a burn.",
            "Huge Power" => "Doubles the Pokémon's Attack stat.",
            "Honey Gather" => "The Pokémon may gather Honey after a battle.",
            "Hydration" => "Heals status conditions if it's raining.",
            "Limber" => "The Pokémon is protected from paralysis.",
            "Shed Skin" => "The Pokémon may heal its own status conditions by shedding its skin.",
            "Storm Drain" => "Draws in all Water-type moves to up Sp. Attack.",
            "Sap Sipper" => "Boosts the Attack stat if hit by a Grass-type move, instead of taking damage.",
            "Gooey" => "Contact with the Pokémon lowers the attacker's Speed stat.",
            "Power of Alchemy" => "The Pokémon copies the Ability of a defeated ally.",
            "Dancer" => "Copies the foe's Dance moves.",
            "Weak Armor" => "Physical attacks lower its Defense stat and raise its Speed stat.",
            "Unburden" => "Boosts the Speed stat if the Pokémon's held item is used or lost.",
            "Beast Boost" => "The Pokémon boosts its most proficient stat each time it knocks out a Pokémon.",
            "Regenerator" => "Restores a little HP when withdrawn from battle.",
            "Symbiosis" => "The Pokémon can pass an item to an ally.",
            "Intrepid Sword" => "Boosts the Pokémon's Attack stat when it enters a battle.",
            "Libero" => "Changes the Pokémon's type to the type of the move it's about to use.",
            "Wandering Spirit" => "The Pokémon exchanges Abilities with a Pokémon that hits it with a move that makes direct contact.",
            "Moody" => "Raises one stat and lowers another.",
            "Perish Body" => "When hit by a move that makes direct contact, the Pokémon and the attacker will faint after three turns unless they switch out of battle.",
            "Power Spot" => "The Pokémon can use its moves earlier than usual.",
            "Ripen" => "Ripens Berries and doubles their effect.",
            "Ice Scales" => "The Pokémon is protected by ice scales, which halve the damage taken from special moves.",
            "Sand Spit" => "The Pokémon creates a sandstorm when it's hit by an attack.",
            "Ball Fetch" => "The Pokémon retrieves the Poké Ball when it's missed the target.",
            "Mirror Armor" => "Bounces back only the stat-lowering effects that the Pokémon receives.",
            "Gorilla Tactics" => "Boosts the Pokémon's Attack stat but only allows the use of the first selected move.",
            "Neutralizing Gas" => "The Pokémon's Ability prevents opposing Pokémon's Abilities from having any effect.",
            "Pastel Veil" => "Prevents the Pokémon and its allies from becoming poisoned.",
            "Steam Engine" => "The Pokémon's Speed stat is raised by one stage after it's hit by a Fire- or Water-type move.",
            "Punk Rock" => "Boosts sound-based moves.",
            "Quick Draw" => "Speed Priority is increased by 1.",
            "Stalwart" => "Ignores the effects of opposing Pokémon's Abilities and moves that draw in moves.",
            "Sweet Veil" => "Prevents itself and ally Pokémon from falling asleep.",
            "Tangling Hair" => "Contact with the Pokémon lowers the attacker's Speed stat.",
            "Telepathy" => "Protects against friendly Pokémon's damaging moves.",
            "Veil of Darkness" => "Opposing Pokémon cannot use their Berries.",
            "Propeller Tail" => "Ignores the effects of opposing Pokémon's Abilities and moves that draw in moves.",
            "Hunger Switch" => "Changes the Pokémon's form, depending on the moves it uses in battle.",
            "As One (Glastrier/Spectrier)" => "The Pokémon changes form depending on which move it uses.",
            "Cotton Down" => "When hit by an attack, the Pokémon lowers the Speed stat of all opposing Pokémon.",
            "Dauntless Shield" => "Boosts the Pokémon's Defense stat when the Pokémon enters a battle.",
            "Ice Face" => "The Pokémon's Ice Head can take a physical attack as a substitute, but the attack also changes the Pokémon's appearance. The ice will be restored when it hails.",
            "Mimicry" => "Changes the Pokémon's type depending on the battlefield's terrain.",
            "Screen Cleaner" => "Removes entry hazards, entry hazard effects, and terrain effects from the opposing field upon switching in.",
            "Big Pecks" => "Its defense cannot be lowered.",
            "Speed Boost" => "Its Speed stat is boosted every turn.",
            "Super Luck" => "Heightens the critical-hit ratios of moves.",
            "Fur Coat" => "Halves damage from physical moves.",
            "Guts" => "Boosts Attack if there is a status problem.",
            "Rattled" => "Raises Speed upon flinching.",
            "Marvel Scale" => "Ups Defense if there is a status problem.",
            "Reckless" => "Powers up moves that have recoil damage.",
            "Serene Grace" => "Boosts the likelihood of added effects appearing.",
            "Sniper" => "Powers up moves if they become critical hits.",
            "Clear Body" => "Prevents the Pokémon's stats from being lowered by other Pokémon.",
            "Contrary" => "Makes stat changes have an opposite effect.",
            "Flare Boost" => "Boosts Sp. Atk if there is a status problem.",
            "Healer" => "May heal an ally's status conditions.",
            "Heatproof" => "Weakens the power of Fire-type moves.",
            "Heavy Metal" => "Doubles the Pokémon's weight.",
            "Ice Body" => "The Pokémon regains HP in a hailstorm.",
            "Iron Barbs" => "Inflicts damage to the attacker on contact with iron barbs.",
            "Light Metal" => "Halves the Pokémon's weight.",
            "Liquid Voice" => "All sound-based moves become Water-type moves.",
            "Magic Bounce" => "Reflects status moves, instead of getting hit by them.",
            "Magic Guard" => "The Pokémon only takes damage from attacks.",
            "Minus" => "Draws in all Electric-type moves to boost its Special Attack stat.",
            "Moxie" => "The Pokémon shows moxie, and that boosts the Attack stat after knocking out any Pokémon.",
            "Multiscale" => "Reduces damage when HP is full.",
            "Multitype" => "Changes type to match the held Plate or Z-Crystal.",
            "Mummy" => "Contact with the Pokémon spreads this Ability.",
            "No Guard" => "Ensures attacks by or against the Pokémon land.",
            "Normalize" => "Changes all the Pokémon's moves to Normal type.",
            "Overcoat" => "Protects the Pokémon from things like sand, hail, and powder.",
            "Overgrow" => "Powers up Grass-type moves in a pinch.",
            "Own Tempo" => "Prevents the Pokémon from becoming confused.",
            "Parental Bond" => "The parent and child experience the joys of bonds together. When the parent uses a move, the child does, too.",
            "Pixilate" => "Normal-type moves become Fairy-type moves.",
            "Plus" => "Draws in all Electric-type moves to boost its Special Attack stat.",
            "Poison Heal" => "Restores HP if the Pokémon is poisoned.",
            "Poison Point" => "Contact with the Pokémon may poison the attacker.",
            "Poison Touch" => "May poison a target when the Pokémon makes contact.",
            "Power Construct" => "Other Cells gather to aid when its HP becomes half or less. Then the Pokémon changes its form to Complete Forme.",
            "Prism Armor" => "Reduces the power of supereffective attacks taken.",
            "Protean" => "Changes the Pokémon's type to the type of the move it's about to use.",
            "Psychic Surge" => "The field becomes Psychic Terrain when the Pokémon enters battle.",
            "Pure Power" => "Powers up the Pokémon's Attack stat.",
            "Quick Feet" => "Boosts Speed if there is a status problem.",
            "Rain Dish" => "The Pokémon gradually regains HP in rain.",
            "Receiver" => "The Pokémon copies the Ability of a defeated ally.",
            "RKS System" => "Changes the Pokémon's type and form depending on the memory disc it holds.",
            "Sand Force" => "Boosts certain moves' power in a sandstorm.",
            "Sand Rush" => "Boosts the Pokémon's Speed stat in a sandstorm.",
            "Scrappy" => "Enables moves to hit Ghost-type Pokémon.",
            "Shadow Shield" => "Halves the Pokémon's HP when its HP becomes full.",
            "Shell Armor" => "The Pokémon is protected against critical hits.",
            "Shields Down" => "When its HP becomes half or less, the Pokémon's shell breaks and it becomes aggressive.",
            "Simple" => "The Pokémon is prone to wild stat changes.",
            "Slow Start" => "Temporarily halves Attack and Speed.",
            "Solar Power" => "Boosts the Sp. Atk stat in sunny weather, but HP decreases every turn.",
            "Solid Rock" => "Powers down super-effective moves.",
            "Soul-Heart" => "Boosts its Sp. Atk stat every time a Pokémon faints.",
            "Stakeout" => "Doubles the damage dealt to the target’s replacement if the target switches out.",
            "Stall" => "The Pokémon moves after all other Pokémon do.",
            "Stamina" => "Boosts the Defense stat when hit by an attack.",
            "Stance Change" => "The Pokémon changes its form to Blade Forme when it uses an attack move, and changes to Shield Forme when it uses King's Shield.",
            "Steadfast" => "Speed increases each time the Pokémon flinches.",
            "Steelworker" => "Powers up Steel-type moves.",
            "Steely Spirit" => "Powers up ally Pokémon's Steel-type moves.",
            "Strong Jaw" => "Boosts the power of biting moves.",
            "Swarm" => "Powers up Bug-type moves in a pinch.",
            "Technician" => "Powers up the Pokémon's weaker moves.",
            "Terra Volt" => "Prevents opposing Pokémon from landing critical hits.",
            "Terrify" => "In Double Battles, the Pokémon frightens opposing Pokémon and makes them unable to eat Berries.",
            "Tinted Lens" => "Powers up less effective moves.",
            "Tough Claws" => "Powers up moves that make direct contact.",
            "Toxic Boost" => "Powers up physical attacks when poisoned.",
            "Trace" => "The Pokémon copies the Ability of a foe that uses a move that requires making contact with the Pokémon.",
            "Triage" => "Gives priority to a healing move.",
            "Truant" => "The Pokémon can't use a move the following turn if it uses one.",
            "Turboblaze" => "Moves can be used on the target regardless of its Abilities.",
            "Unaware" => "Ignores any stat changes in the Pokémon.",
            "Unseen Fist" => "Contact with the Pokémon will cause you to faint, but it's still a mystery how it occurs.",
            "Victory Star" => "Boosts the accuracy of its allies and itself.",
            "Water Compaction" => "Boosts Defense stat sharply when hit by a Water-type move.",
            "Wimp Out" => "The Pokémon cowardly switches out when its HP becomes half or less.",
            "Wonder Skin" => "Makes status moves more likely to miss.",
            "Zen Mode" => "Changes the Pokémon's shape when HP is halved."
        ];

        foreach ($abilities as $abilityName => $description) {
            $ability = new Ability();
            $ability->setName($abilityName);
            $ability->setDescription($description);
            $manager->persist($ability);
        }

        $manager->flush();
    }
}
