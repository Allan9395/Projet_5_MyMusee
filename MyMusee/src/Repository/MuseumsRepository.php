<?php

namespace App\Repository;

use App\Entity\Museums;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Museums|null find($id, $lockMode = null, $lockVersion = null)
 * @method Museums|null findOneBy(array $criteria, array $orderBy = null)
 * @method Museums[]    findAll()
 * @method Museums[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MuseumsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Museums::class);
    }



    // /**
    //  * @return Museums[] Returns an array of Museums objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Museums
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
