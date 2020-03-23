<?php

namespace App\Repository;

use App\Entity\Infoitem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Infoitem|null find($id, $lockMode = null, $lockVersion = null)
 * @method Infoitem|null findOneBy(array $criteria, array $orderBy = null)
 * @method Infoitem[]    findAll()
 * @method Infoitem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoitemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Infoitem::class);
    }

    // /**
    //  * @return Infoitem[] Returns an array of Infoitem objects
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
    public function findOneBySomeField($value): ?Infoitem
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
