<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeRepository::class)]
class Type
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Moveset>
     */
    #[ORM\ManyToMany(targetEntity: Moveset::class, mappedBy: 'type')]
    private Collection $movesets;

    /**
     * @var Collection<int, Pokemon>
     */
    #[ORM\ManyToMany(targetEntity: Pokemon::class, mappedBy: 'type')]
    private Collection $pokemon;

    public function __construct()
    {
        $this->movesets = new ArrayCollection();
        $this->pokemon = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Moveset>
     */
    public function getMovesets(): Collection
    {
        return $this->movesets;
    }

    public function addMoveset(Moveset $moveset): static
    {
        if (!$this->movesets->contains($moveset)) {
            $this->movesets->add($moveset);
            $moveset->addType($this);
        }

        return $this;
    }

    public function removeMoveset(Moveset $moveset): static
    {
        if ($this->movesets->removeElement($moveset)) {
            $moveset->removeType($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Pokemon>
     */
    public function getPokemon(): Collection
    {
        return $this->pokemon;
    }

    public function addPokemon(Pokemon $pokemon): static
    {
        if (!$this->pokemon->contains($pokemon)) {
            $this->pokemon->add($pokemon);
            $pokemon->addType($this);
        }

        return $this;
    }

    public function removePokemon(Pokemon $pokemon): static
    {
        if ($this->pokemon->removeElement($pokemon)) {
            $pokemon->removeType($this);
        }

        return $this;
    }
}
