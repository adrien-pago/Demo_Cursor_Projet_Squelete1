<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\FormuleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormuleRepository::class)]
#[ORM\Table(name: 'formule')]
class Formule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name = ''; // 'salade' ou 'menu complet'

    #[ORM\OneToMany(mappedBy: 'formule', targetEntity: CompositionFormule::class, cascade: ['remove'])]
    private Collection $compositionFormules;

    #[ORM\OneToMany(mappedBy: 'formule', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->compositionFormules = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getName(): string { return $this->name; }
    public function setName(string $name): self { $this->name = $name; return $this; }

    /**
     * @return Collection<int, CompositionFormule>
     */
    public function getCompositionFormules(): Collection { return $this->compositionFormules; }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection { return $this->reservations; }
}

