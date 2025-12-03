<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\CompositionEntreeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompositionEntreeRepository::class)]
#[ORM\Table(name: 'composition_entree')]
class CompositionEntree
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: CarteDuJour::class, inversedBy: 'compositionEntrees')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?CarteDuJour $carteDuJour = null;

    #[ORM\ManyToOne(targetEntity: Entree::class, inversedBy: 'compositionEntrees')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Entree $entree = null;

    public function getId(): ?int { return $this->id; }

    public function getCarteDuJour(): ?CarteDuJour { return $this->carteDuJour; }
    public function setCarteDuJour(?CarteDuJour $carteDuJour): self { $this->carteDuJour = $carteDuJour; return $this; }

    public function getEntree(): ?Entree { return $this->entree; }
    public function setEntree(?Entree $entree): self { $this->entree = $entree; return $this; }
}

