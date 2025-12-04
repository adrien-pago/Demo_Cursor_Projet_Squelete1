<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Reservation;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }

    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('r')
            ->where('r.user = :user')
            ->setParameter('user', $user)
            ->orderBy('r.date', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findByDate(\DateTimeInterface $date): array
    {
        // Normaliser la date pour la comparaison (enlever l'heure, garder seulement la date)
        $dateNormalized = \DateTime::createFromInterface($date);
        $dateNormalized->setTime(0, 0, 0);
        
        // Pour SQLite, utiliser le format string Y-m-d directement
        $dateString = $dateNormalized->format('Y-m-d');
        
        // Charger les formules et lieux avec des joins pour éviter le lazy loading
        return $this->createQueryBuilder('r')
            ->leftJoin('r.formule', 'f')
            ->addSelect('f')
            ->leftJoin('r.lieu', 'l')
            ->addSelect('l')
            ->leftJoin('r.user', 'u')
            ->addSelect('u')
            ->leftJoin('r.salade', 's')
            ->addSelect('s')
            ->leftJoin('r.entree', 'e')
            ->addSelect('e')
            ->leftJoin('r.plat', 'p')
            ->addSelect('p')
            ->leftJoin('r.accompagnement', 'a')
            ->addSelect('a')
            ->where('r.date = :date')
            ->setParameter('date', $dateString)
            ->orderBy('r.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }
}

