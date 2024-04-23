<?php

namespace App\Repository;

use App\Entity\Moveset;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Moveset>
 *
 * @method Moveset|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moveset|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moveset[]    findAll()
 * @method Moveset[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovesetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Moveset::class);
    }

    //    /**
    //     * @return Moveset[] Returns an array of Moveset objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Moveset
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
