<?php

namespace App\Repository;

use App\Entity\Homepage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Homepage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Homepage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Homepage[]    findAll()
 * @method Homepage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomepageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Homepage::class);
    }

    // /**
    //  * @return Homepage[] Returns an array of Homepage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Homepage
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
