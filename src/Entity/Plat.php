<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\PlatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatRepository::class)]
#[ORM\Table(name: 'plat')]
class Plat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: TypeChoix::class, inversedBy: 'plats')]
    private ?TypeChoix $typeChoix = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name = '';

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'plat', targetEntity: CompositionPlat::class, cascade: ['remove'])]
    private Collection $compositionPlats;

    #[ORM\OneToMany(mappedBy: 'plat', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->compositionPlats = new ArrayCollection();
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
     * @return Collection<int, CompositionPlat>
     */
    public function getCompositionPlats(): Collection { return $this->compositionPlats; }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection { return $this->reservations; }
}

