<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\MessRequestRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessRequestRepository::class)]
#[ORM\Table(name: 'mess_request')]
class MessRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $nombreConvives = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $petitDejeuner = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $dejeuner = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $pauses = false;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $diner = false;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $commentaires = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $sentAt;

    public function __construct()
    {
        $this->sentAt = new \DateTimeImmutable();
    }

    public function getId(): ?int { return $this->id; }

    public function getUser(): ?User { return $this->user; }
    public function setUser(?User $user): self { $this->user = $user; return $this; }

    public function getDate(): ?\DateTimeInterface { return $this->date; }
    public function setDate(?\DateTimeInterface $date): self { $this->date = $date; return $this; }

    public function getNombreConvives(): ?int { return $this->nombreConvives; }
    public function setNombreConvives(?int $nombreConvives): self { $this->nombreConvives = $nombreConvives; return $this; }

    public function isPetitDejeuner(): bool { return $this->petitDejeuner; }
    public function setPetitDejeuner(bool $petitDejeuner): self { $this->petitDejeuner = $petitDejeuner; return $this; }

    public function isDejeuner(): bool { return $this->dejeuner; }
    public function setDejeuner(bool $dejeuner): self { $this->dejeuner = $dejeuner; return $this; }

    public function isPauses(): bool { return $this->pauses; }
    public function setPauses(bool $pauses): self { $this->pauses = $pauses; return $this; }

    public function isDiner(): bool { return $this->diner; }
    public function setDiner(bool $diner): self { $this->diner = $diner; return $this; }

    public function getCommentaires(): ?string { return $this->commentaires; }
    public function setCommentaires(?string $commentaires): self { $this->commentaires = $commentaires; return $this; }

    public function getSentAt(): \DateTimeImmutable { return $this->sentAt; }
    public function setSentAt(\DateTimeImmutable $sentAt): self { $this->sentAt = $sentAt; return $this; }
}
