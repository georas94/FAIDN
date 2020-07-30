<?php

namespace App\Repository;

use App\Entity\CitationSlider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CitationSlider|null find($id, $lockMode = null, $lockVersion = null)
 * @method CitationSlider|null findOneBy(array $criteria, array $orderBy = null)
 * @method CitationSlider[]    findAll()
 * @method CitationSlider[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CitationSliderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CitationSlider::class);
    }

    /**
     * @return CitationSlider[] Returns an array of CitationSlider objects
    */
  
    public function findAllByOrder()
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?CitationSlider
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
