<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\TypeChoixRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeChoixRepository::class)]
#[ORM\Table(name: 'type_choix')]
class TypeChoix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name = '';

    #[ORM\OneToMany(mappedBy: 'typeChoix', targetEntity: Entree::class)]
    private Collection $entrees;

    #[ORM\OneToMany(mappedBy: 'typeChoix', targetEntity: Plat::class)]
    private Collection $plats;

    #[ORM\OneToMany(mappedBy: 'typeChoix', targetEntity: Accompagnement::class)]
    private Collection $accompagnements;

    #[ORM\OneToMany(mappedBy: 'typeChoix', targetEntity: Dessert::class)]
    private Collection $desserts;

    #[ORM\OneToMany(mappedBy: 'typeChoix', targetEntity: Salade::class)]
    private Collection $salades;

    public function __construct()
    {
        $this->entrees = new ArrayCollection();
        $this->plats = new ArrayCollection();
        $this->accompagnements = new ArrayCollection();
        $this->desserts = new ArrayCollection();
        $this->salades = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getName(): string { return $this->name; }
    public function setName(string $name): self { $this->name = $name; return $this; }

    /**
     * @return Collection<int, Entree>
     */
    public function getEntrees(): Collection { return $this->entrees; }

    /**
     * @return Collection<int, Plat>
     */
    public function getPlats(): Collection { return $this->plats; }

    /**
     * @return Collection<int, Accompagnement>
     */
    public function getAccompagnements(): Collection { return $this->accompagnements; }

    /**
     * @return Collection<int, Dessert>
     */
    public function getDesserts(): Collection { return $this->desserts; }

    /**
     * @return Collection<int, Salade>
     */
    public function getSalades(): Collection { return $this->salades; }
}

