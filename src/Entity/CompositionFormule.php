<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\CompositionFormuleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompositionFormuleRepository::class)]
#[ORM\Table(name: 'composition_formule')]
class CompositionFormule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: CarteDuJour::class, inversedBy: 'compositionFormules')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?CarteDuJour $carteDuJour = null;

    #[ORM\ManyToOne(targetEntity: Formule::class, inversedBy: 'compositionFormules')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Formule $formule = null;

    public function getId(): ?int { return $this->id; }

    public function getCarteDuJour(): ?CarteDuJour { return $this->carteDuJour; }
    public function setCarteDuJour(?CarteDuJour $carteDuJour): self { $this->carteDuJour = $carteDuJour; return $this; }

    public function getFormule(): ?Formule { return $this->formule; }
    public function setFormule(?Formule $formule): self { $this->formule = $formule; return $this; }
}

