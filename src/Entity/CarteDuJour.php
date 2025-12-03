<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\CarteDuJourRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarteDuJourRepository::class)]
#[ORM\Table(name: 'carte_du_jour')]
#[ORM\UniqueConstraint(name: 'unique_date', columns: ['date'])]
class CarteDuJour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'date', unique: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private string $price = '0.00';

    #[ORM\Column(type: 'boolean')]
    private bool $locked = false;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $comment = null;

    #[ORM\Column(type: 'boolean')]
    private bool $available = true;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $updatedAt;

    #[ORM\OneToMany(mappedBy: 'carteDuJour', targetEntity: CompositionEntree::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $compositionEntrees;

    #[ORM\OneToMany(mappedBy: 'carteDuJour', targetEntity: CompositionPlat::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $compositionPlats;

    #[ORM\OneToMany(mappedBy: 'carteDuJour', targetEntity: CompositionAccompagnement::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $compositionAccompagnements;

    #[ORM\OneToMany(mappedBy: 'carteDuJour', targetEntity: CompositionDessert::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $compositionDesserts;

    #[ORM\OneToMany(mappedBy: 'carteDuJour', targetEntity: CompositionSalade::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $compositionSalades;

    #[ORM\OneToMany(mappedBy: 'carteDuJour', targetEntity: CompositionFormule::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $compositionFormules;

    #[ORM\OneToMany(mappedBy: 'carteDuJour', targetEntity: CompositionLieu::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $compositionLieus;

    #[ORM\OneToMany(mappedBy: 'carteDuJour', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
        $this->compositionEntrees = new ArrayCollection();
        $this->compositionPlats = new ArrayCollection();
        $this->compositionAccompagnements = new ArrayCollection();
        $this->compositionDesserts = new ArrayCollection();
        $this->compositionSalades = new ArrayCollection();
        $this->compositionFormules = new ArrayCollection();
        $this->compositionLieus = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int { return $this->id; }

    public function getDate(): ?\DateTimeInterface { return $this->date; }
    public function setDate(?\DateTimeInterface $date): self { $this->date = $date; return $this; }

    public function getPrice(): string { return $this->price; }
    public function setPrice(string $price): self { $this->price = $price; return $this; }

    public function isLocked(): bool { return $this->locked; }
    public function setLocked(bool $locked): self { $this->locked = $locked; return $this; }

    public function getComment(): ?string { return $this->comment; }
    public function setComment(?string $comment): self { $this->comment = $comment; return $this; }

    public function isAvailable(): bool { return $this->available; }
    public function setAvailable(bool $available): self { $this->available = $available; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function getUpdatedAt(): \DateTimeImmutable { return $this->updatedAt; }

    /**
     * @return Collection<int, CompositionEntree>
     */
    public function getCompositionEntrees(): Collection { return $this->compositionEntrees; }

    /**
     * @return Collection<int, CompositionPlat>
     */
    public function getCompositionPlats(): Collection { return $this->compositionPlats; }

    /**
     * @return Collection<int, CompositionAccompagnement>
     */
    public function getCompositionAccompagnements(): Collection { return $this->compositionAccompagnements; }

    /**
     * @return Collection<int, CompositionDessert>
     */
    public function getCompositionDesserts(): Collection { return $this->compositionDesserts; }

    /**
     * @return Collection<int, CompositionSalade>
     */
    public function getCompositionSalades(): Collection { return $this->compositionSalades; }

    /**
     * @return Collection<int, CompositionFormule>
     */
    public function getCompositionFormules(): Collection { return $this->compositionFormules; }

    /**
     * @return Collection<int, CompositionLieu>
     */
    public function getCompositionLieus(): Collection { return $this->compositionLieus; }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection { return $this->reservations; }
}

