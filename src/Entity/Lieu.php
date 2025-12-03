<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\LieuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieuRepository::class)]
#[ORM\Table(name: 'lieu')]
class Lieu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name = '';

    #[ORM\OneToMany(mappedBy: 'lieu', targetEntity: CompositionLieu::class, cascade: ['remove'])]
    private Collection $compositionLieus;

    #[ORM\OneToMany(mappedBy: 'lieu', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->compositionLieus = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getName(): string { return $this->name; }
    public function setName(string $name): self { $this->name = $name; return $this; }

    /**
     * @return Collection<int, CompositionLieu>
     */
    public function getCompositionLieus(): Collection { return $this->compositionLieus; }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection { return $this->reservations; }
}

