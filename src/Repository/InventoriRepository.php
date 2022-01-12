<?php

namespace App\Repository;

use App\Entity\Inventori;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Inventori|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inventori|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inventori[]    findAll()
 * @method Inventori[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InventoriRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inventori::class);
    }

    // /**
    //  * @return Inventori[] Returns an array of Inventori objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Inventori
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
