<?php

namespace App\Repository;

use App\Entity\Partners;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Partners|null find($id, $lockMode = null, $lockVersion = null)
 * @method Partners|null findOneBy(array $criteria, array $orderBy = null)
 * @method Partners[]    findAll()
 * @method Partners[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartnersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Partners::class);
    }

    /**
     * @return Partners[] Returns an array of Partners objects
    */

    public function findInstitutionnels()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.category = :val')
            ->setParameter('val', 'institutionnels')
            ->orderBy('p.id', 'ASC')
            //->setMaxResults()
            ->getQuery()
            ->getResult()
        ;
    }


    public function findPrives()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.category = :val')
            ->setParameter('val', 'prives')
            ->orderBy('p.id', 'ASC')
            //->setMaxResults()
            ->getQuery()
            ->getResult()
        ;
    }

    public function findMedias()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.category = :val')
            ->setParameter('val', 'medias')
            ->orderBy('p.id', 'ASC')
            //->setMaxResults()
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findAssociatif()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.category = :val')
            ->setParameter('val', 'associatif')
            ->orderBy('p.id', 'ASC')
            //->setMaxResults()
            ->getQuery()
            ->getResult()
        ;
    }
    
    public function findPartnerById($id)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.id = :val')
            ->setParameter('val', $id)
            //->setMaxResults()
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Partners
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
