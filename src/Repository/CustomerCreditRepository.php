<?php

namespace App\Repository;

use App\Entity\CustomerCredit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CustomerCredit|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerCredit|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerCredit[]    findAll()
 * @method CustomerCredit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerCreditRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomerCredit::class);
    }

    // /**
    //  * @return CustomerCredit[] Returns an array of CustomerCredit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CustomerCredit
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
