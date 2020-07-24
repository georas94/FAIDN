<?php

namespace App\Repository;

use App\Entity\Articles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Articles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Articles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Articles[]    findAll()
 * @method Articles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Articles::class);
    }

    /**
     * @return Articles[] Returns an array of Articles objects
    */

    public function findByName($article)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.title = :val')
            ->setParameter('val', $article)
            //->orderBy('a.id', 'ASC')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAllOrder()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAllOrderEvent()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->andWhere('a.category = :val')
            ->setParameter('val', 'event')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAllOrderProject()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->andWhere('a.category = :val')
            ->setParameter('val', 'projects')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAllOrderMission($category)
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->andWhere('a.category = :val')
            ->setParameter('val', $category)
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findById($id)
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->andWhere('a.id = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAllLastEvents()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->andWhere('a.category = :val')
            ->setParameter('val', 'event')
            ->setMaxResults(2)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Articles
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
