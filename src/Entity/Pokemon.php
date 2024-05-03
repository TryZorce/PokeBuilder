<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]

class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[Assert\Range(['min' => 1, 'max' => 100])]
    private ?int $level = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    private ?string $nickname = null;

    #[ORM\ManyToOne(inversedBy: 'id_pokemon')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'pokemon')]
    private ?Item $item = null;

    #[ORM\ManyToOne(inversedBy: 'pokemon')]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    private ?Species $species = null;

    #[ORM\ManyToOne(inversedBy: 'pokemon')]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    private ?Ability $ability = null;

    /**
     * @var Collection<int, Moveset>
     */
    #[ORM\ManyToMany(targetEntity: Moveset::class, inversedBy: 'pokemon')]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[Assert\Count(['min' => 1, 'max' => 4])]
    private Collection $moveset;

    /**
     * @var Collection<int, Type>
     */
    #[ORM\ManyToMany(targetEntity: Type::class, inversedBy: 'pokemon')]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[Assert\Count(['min' => 1, 'max' => 2])]
    private Collection $type;

    /**
     * @var Collection<int, Team>
     */
    #[ORM\ManyToMany(targetEntity: Team::class, mappedBy: 'pokemon')]
    private Collection $teams;

    public function __construct()
    {
        $this->moveset = new ArrayCollection();
        $this->type = new ArrayCollection();
        $this->teams = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): static
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(?Item $item): static
    {
        $this->item = $item;

        return $this;
    }

    public function getSpecies(): ?Species
    {
        return $this->species;
    }

    public function setSpecies(?Species $species): static
    {
        $this->species = $species;

        return $this;
    }

    public function getAbility(): ?Ability
    {
        return $this->ability;
    }

    public function setAbility(?Ability $ability): static
    {
        $this->ability = $ability;

        return $this;
    }

    /**
     * @return Collection<int, Moveset>
     */
    public function getMoveset(): Collection
    {
        return $this->moveset;
    }

    public function addMoveset(Moveset $moveset): static
    {
        if (!$this->moveset->contains($moveset)) {
            $this->moveset->add($moveset);
        }

        return $this;
    }

    public function removeMoveset(Moveset $moveset): static
    {
        $this->moveset->removeElement($moveset);

        return $this;
    }

    /**
     * @return Collection<int, Type>
     */
    public function getType(): Collection
    {
        return $this->type;
    }

    public function addType(Type $type): static
    {
        if (!$this->type->contains($type)) {
            $this->type->add($type);
        }

        return $this;
    }

    public function removeType(Type $type): static
    {
        $this->type->removeElement($type);

        return $this;
    }

    /**
     * @return Collection<int, Team>
     */
    public function getTeams(): Collection
    {
        return $this->teams;
    }

    public function addTeam(Team $team): static
    {
        if (!$this->teams->contains($team)) {
            $this->teams->add($team);
            $team->addPokemon($this);
        }

        return $this;
    }

    public function removeTeam(Team $team): static
    {
        if ($this->teams->removeElement($team)) {
            $team->removePokemon($this);
        }

        return $this;
    }
}
