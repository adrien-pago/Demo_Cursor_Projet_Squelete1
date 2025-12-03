<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\DessertRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DessertRepository::class)]
#[ORM\Table(name: 'dessert')]
class Dessert
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: TypeChoix::class, inversedBy: 'desserts')]
    private ?TypeChoix $typeChoix = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name = '';

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'dessert', targetEntity: CompositionDessert::class, cascade: ['remove'])]
    private Collection $compositionDesserts;

    #[ORM\OneToMany(mappedBy: 'dessert', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->compositionDesserts = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getTypeChoix(): ?TypeChoix { return $this->typeChoix; }
    public function setTypeChoix(?TypeChoix $typeChoix): self { $this->typeChoix = $typeChoix; return $this; }

    public function getName(): string { return $this->name; }
    public function setName(string $name): self { $this->name = $name; return $this; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): self { $this->description = $description; return $this; }

    /**
     * @return Collection<int, CompositionDessert>
     */
    public function getCompositionDesserts(): Collection { return $this->compositionDesserts; }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection { return $this->reservations; }
}

