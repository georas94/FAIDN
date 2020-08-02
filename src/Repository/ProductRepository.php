<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @return Product[] Returns an array of Product objects
    */
    
    public function findAllOrder()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findById($id)
    {
        return $this->createQueryBuilder('p')
        ->andWhere('p.id = :val')
        ->setParameter('val', $id)
        ->getQuery()
        ->getResult()
        ;
    }
    
    public function findPrices()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p.price
            FROM App\Entity\Product p
            ORDER BY p.price DESC'
        );

        // returns an array of Product objects
        return $query->getResult();
    }
    

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
