<?php

namespace App\Repository;

use App\Entity\Lamasticot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Lamasticot|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lamasticot|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lamasticot[]    findAll()
 * @method Lamasticot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LamasticotRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Lamasticot::class);
    }

//    /**
//     * @return Lamasticot[] Returns an array of Lamasticot objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lamasticot
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
