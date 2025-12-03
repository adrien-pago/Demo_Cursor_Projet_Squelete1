<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\CompositionPlatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompositionPlatRepository::class)]
#[ORM\Table(name: 'composition_plat')]
class CompositionPlat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: CarteDuJour::class, inversedBy: 'compositionPlats')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?CarteDuJour $carteDuJour = null;

    #[ORM\ManyToOne(targetEntity: Plat::class, inversedBy: 'compositionPlats')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Plat $plat = null;

    public function getId(): ?int { return $this->id; }

    public function getCarteDuJour(): ?CarteDuJour { return $this->carteDuJour; }
    public function setCarteDuJour(?CarteDuJour $carteDuJour): self { $this->carteDuJour = $carteDuJour; return $this; }

    public function getPlat(): ?Plat { return $this->plat; }
    public function setPlat(?Plat $plat): self { $this->plat = $plat; return $this; }
}

