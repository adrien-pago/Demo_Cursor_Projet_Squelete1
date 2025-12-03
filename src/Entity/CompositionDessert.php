<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\CompositionDessertRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompositionDessertRepository::class)]
#[ORM\Table(name: 'composition_dessert')]
class CompositionDessert
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: CarteDuJour::class, inversedBy: 'compositionDesserts')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?CarteDuJour $carteDuJour = null;

    #[ORM\ManyToOne(targetEntity: Dessert::class, inversedBy: 'compositionDesserts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Dessert $dessert = null;

    public function getId(): ?int { return $this->id; }

    public function getCarteDuJour(): ?CarteDuJour { return $this->carteDuJour; }
    public function setCarteDuJour(?CarteDuJour $carteDuJour): self { $this->carteDuJour = $carteDuJour; return $this; }

    public function getDessert(): ?Dessert { return $this->dessert; }
    public function setDessert(?Dessert $dessert): self { $this->dessert = $dessert; return $this; }
}

