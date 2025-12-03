<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\MessRequest;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class MessRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MessRequest::class);
    }

    public function findOneByUserAndDate(User $user, \DateTimeInterface $date): ?MessRequest
    {
        return $this->createQueryBuilder('m')
            ->where('m.user = :user')
            ->andWhere('m.date = :date')
            ->setParameter('user', $user)
            ->setParameter('date', $date)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
