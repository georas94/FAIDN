<?php

namespace App\Repository;

use App\Entity\FooterData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FooterData|null find($id, $lockMode = null, $lockVersion = null)
 * @method FooterData|null findOneBy(array $criteria, array $orderBy = null)
 * @method FooterData[]    findAll()
 * @method FooterData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FooterDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FooterData::class);
    }

    // /**
    //  * @return FooterData[] Returns an array of FooterData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FooterData
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
