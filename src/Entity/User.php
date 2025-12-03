<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id] 
    #[ORM\GeneratedValue] 
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private string $email = '';

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(type: 'json')] 
    private array $roles = [];
    
    #[ORM\Column(type: 'string')] 
    private string $password = '';
    
    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $compteVerif = false;
    
    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $adminVerif = false;
    
    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, options: ['default' => '0.00'])]
    private string $balance = '0.00';
    
    #[ORM\Column(type: 'datetime_immutable')] 
    private \DateTimeImmutable $createdAt;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Wallet::class, cascade: ['persist'])]
    private Collection $wallets;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reservation::class, cascade: ['persist'])]
    private Collection $reservations;

    public function __construct() 
    { 
        $this->createdAt = new \DateTimeImmutable();
        $this->wallets = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }
    
    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email): self { $this->email = mb_strtolower($email); return $this; }
    
    public function getName(): ?string { return $this->name; }
    public function setName(?string $name): self { $this->name = $name; return $this; }
    
    public function getUserIdentifier(): string { return $this->email; }
    
    public function getRoles(): array 
    { 
        $r = $this->roles; 
        $r[] = 'ROLE_USER'; 
        return array_values(array_unique($r)); 
    }
    public function setRoles(array $roles): self { $this->roles = $roles; return $this; }
    
    public function getPassword(): string { return $this->password; }
    public function setPassword(string $password): self { $this->password = $password; return $this; }
    
    public function isCompteVerif(): bool { return $this->compteVerif; }
    public function setCompteVerif(bool $compteVerif): self { $this->compteVerif = $compteVerif; return $this; }
    
    public function isAdminVerif(): bool { return $this->adminVerif; }
    public function setAdminVerif(bool $adminVerif): self { $this->adminVerif = $adminVerif; return $this; }
    
    public function getBalance(): string { return $this->balance; }
    public function setBalance(string $balance): self { $this->balance = $balance; return $this; }
    
    public function getBalanceFloat(): float { return (float) $this->balance; }
    
    public function getCreatedAt(): \DateTimeImmutable { return $this->createdAt; }
    
    /**
     * @return Collection<int, Wallet>
     */
    public function getWallets(): Collection { return $this->wallets; }
    
    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection { return $this->reservations; }
    
    public function eraseCredentials(): void {}
}

