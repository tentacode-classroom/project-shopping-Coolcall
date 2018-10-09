<?php

namespace App\Repository;

use App\Entity\Fur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fur[]    findAll()
 * @method Fur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fur::class);
    }

//    /**
//     * @return Fur[] Returns an array of Fur objects
//     */
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
    public function findOneBySomeField($value): ?Fur
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
