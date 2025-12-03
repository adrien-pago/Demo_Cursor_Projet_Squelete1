<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\CarteDuJour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CarteDuJourRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarteDuJour::class);
    }

    public function findByDateRange(\DateTimeInterface $start, \DateTimeInterface $end): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.date >= :start')
            ->andWhere('c.date <= :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('c.date', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findAvailableFromToday(): array
    {
        $today = new \DateTime('today');
        return $this->createQueryBuilder('c')
            ->where('c.date >= :today')
            ->andWhere('c.available = :available')
            ->setParameter('today', $today)
            ->setParameter('available', true)
            ->orderBy('c.date', 'ASC')
            ->getQuery()
            ->getResult();
    }
}

