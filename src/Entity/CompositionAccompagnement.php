<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\CompositionAccompagnementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompositionAccompagnementRepository::class)]
#[ORM\Table(name: 'composition_accompagnement')]
class CompositionAccompagnement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: CarteDuJour::class, inversedBy: 'compositionAccompagnements')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?CarteDuJour $carteDuJour = null;

    #[ORM\ManyToOne(targetEntity: Accompagnement::class, inversedBy: 'compositionAccompagnements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Accompagnement $accompagnement = null;

    public function getId(): ?int { return $this->id; }

    public function getCarteDuJour(): ?CarteDuJour { return $this->carteDuJour; }
    public function setCarteDuJour(?CarteDuJour $carteDuJour): self { $this->carteDuJour = $carteDuJour; return $this; }

    public function getAccompagnement(): ?Accompagnement { return $this->accompagnement; }
    public function setAccompagnement(?Accompagnement $accompagnement): self { $this->accompagnement = $accompagnement; return $this; }
}

