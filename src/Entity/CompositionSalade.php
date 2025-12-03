<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\CompositionSaladeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompositionSaladeRepository::class)]
#[ORM\Table(name: 'composition_salade')]
class CompositionSalade
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: CarteDuJour::class, inversedBy: 'compositionSalades')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?CarteDuJour $carteDuJour = null;

    #[ORM\ManyToOne(targetEntity: Salade::class, inversedBy: 'compositionSalades')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Salade $salade = null;

    public function getId(): ?int { return $this->id; }

    public function getCarteDuJour(): ?CarteDuJour { return $this->carteDuJour; }
    public function setCarteDuJour(?CarteDuJour $carteDuJour): self { $this->carteDuJour = $carteDuJour; return $this; }

    public function getSalade(): ?Salade { return $this->salade; }
    public function setSalade(?Salade $salade): self { $this->salade = $salade; return $this; }
}

