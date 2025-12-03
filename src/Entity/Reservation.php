<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ORM\Table(name: 'reservation')]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne(targetEntity: CarteDuJour::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?CarteDuJour $carteDuJour = null;

    #[ORM\ManyToOne(targetEntity: Entree::class, inversedBy: 'reservations')]
    private ?Entree $entree = null;

    #[ORM\ManyToOne(targetEntity: Plat::class, inversedBy: 'reservations')]
    private ?Plat $plat = null;

    #[ORM\ManyToOne(targetEntity: Accompagnement::class, inversedBy: 'reservations')]
    private ?Accompagnement $accompagnement = null;

    #[ORM\ManyToOne(targetEntity: Dessert::class, inversedBy: 'reservations')]
    private ?Dessert $dessert = null;

    #[ORM\ManyToOne(targetEntity: Salade::class, inversedBy: 'reservations')]
    private ?Salade $salade = null;

    #[ORM\ManyToOne(targetEntity: Formule::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Formule $formule = null;

    #[ORM\ManyToOne(targetEntity: Lieu::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Lieu $lieu = null;

    #[ORM\ManyToOne(targetEntity: StatutCommande::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?StatutCommande $statutCommande = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private string $price = '0.00';

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int { return $this->id; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): self { $this->user = $user; return $this; }

    public function getCarteDuJour(): ?CarteDuJour { return $this->carteDuJour; }
    public function setCarteDuJour(?CarteDuJour $carteDuJour): self { $this->carteDuJour = $carteDuJour; return $this; }

    public function getEntree(): ?Entree { return $this->entree; }
    public function setEntree(?Entree $entree): self { $this->entree = $entree; return $this; }

    public function getPlat(): ?Plat { return $this->plat; }
    public function setPlat(?Plat $plat): self { $this->plat = $plat; return $this; }

    public function getAccompagnement(): ?Accompagnement { return $this->accompagnement; }
    public function setAccompagnement(?Accompagnement $accompagnement): self { $this->accompagnement = $accompagnement; return $this; }

    public function getDessert(): ?Dessert { return $this->dessert; }
    public function setDessert(?Dessert $dessert): self { $this->dessert = $dessert; return $this; }

    public function getSalade(): ?Salade { return $this->salade; }
    public function setSalade(?Salade $salade): self { $this->salade = $salade; return $this; }

    public function getFormule(): ?Formule { return $this->formule; }
    public function setFormule(?Formule $formule): self { $this->formule = $formule; return $this; }

    public function getLieu(): ?Lieu { return $this->lieu; }
    public function setLieu(?Lieu $lieu): self { $this->lieu = $lieu; return $this; }

    public function getStatutCommande(): ?StatutCommande { return $this->statutCommande; }
    public function setStatutCommande(?StatutCommande $statutCommande): self { $this->statutCommande = $statutCommande; return $this; }

    public function getPrice(): string { return $this->price; }
    public function setPrice(string $price): self { $this->price = $price; return $this; }

    public function getDate(): ?\DateTimeInterface { return $this->date; }
    public function setDate(?\DateTimeInterface $date): self { $this->date = $date; return $this; }

    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    public function getUpdatedAt(): \DateTimeImmutable { return $this->updatedAt; }
}

