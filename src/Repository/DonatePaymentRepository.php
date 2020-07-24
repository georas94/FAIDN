<?php

namespace App\Repository;

use App\Entity\DonatePayment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DonatePayment|null find($id, $lockMode = null, $lockVersion = null)
 * @method DonatePayment|null findOneBy(array $criteria, array $orderBy = null)
 * @method DonatePayment[]    findAll()
 * @method DonatePayment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DonatePaymentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DonatePayment::class);
    }

    // /**
    //  * @return DonatePayment[] Returns an array of DonatePayment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DonatePayment
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
