<?php

namespace App\Repository;

use App\Entity\Museums;
use App\Entity\MuseumSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;


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

    public function findAllVisibleRegionQuery($region): Query
    {
        $query = $this->findVisibleQuery();

        if ($region) {
            $query = $query
                ->where('p.Region = :region')
                ->setParameter('region', $region);
        }

        return $query->getQuery();
    }

    public function findAllVisibleQuery( MuseumSearch $search): Query
    {
        $query = $this->findVisibleQuery();

        if ($search->getRegion()) {
            $query = $query 
                    ->where('p.Region = :region')
                    ->setParameter('region', $search->getRegion());
        }
        if ($search->getDepartement()) {
            $query = $query 
                    ->andWhere('p.Departement = :departement')
                    ->setParameter('departement', $search->getDepartement());
        }
        if ($search->getVille()) {
            $query = $query 
                    ->andWhere('p.Ville = :ville')
                    ->setParameter('ville', $search->getVille());
        }

        return $query->getQuery();
    }
    

    private function findVisibleQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('p');
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