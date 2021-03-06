<?php

namespace App\Repository;

use App\Entity\Payment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Payment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Payment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Payment[]    findAll()
 * @method Payment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaymentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Payment::class);
    }

     /**
      * @return Payment[] Returns an array of Payment objects
      */
    
    public function findPayment()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }


    
    public function findPaymentStatusTrue()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.status = :val')
            ->orderBy('p.id', 'DESC')
            ->setParameter('val', 1)
            ->getQuery()
            ->getResult()
        ;
    }
    
    
    public function findPaymentByEmail($email)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.email = :val')
            ->setParameter('val', $email)
            ->getQuery()
            ->getResult()
        ;
    }


    
}
