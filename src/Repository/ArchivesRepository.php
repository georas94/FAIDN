<?php

namespace App\Repository;

use App\Entity\Archives;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Archives|null find($id, $lockMode = null, $lockVersion = null)
 * @method Archives|null findOneBy(array $criteria, array $orderBy = null)
 * @method Archives[]    findAll()
 * @method Archives[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArchivesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Archives::class);
    }

    /**
     * @return Archives[] Returns an array of Archives objects
    */
   
    public function findAllOrder()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
 

    /*
    public function findOneBySomeField($value): ?Archives
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
