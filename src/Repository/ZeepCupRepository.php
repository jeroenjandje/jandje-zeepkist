<?php

namespace App\Repository;

use App\Entity\ZeepCup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ZeepCup>
 *
 * @method ZeepCup|null find($id, $lockMode = null, $lockVersion = null)
 * @method ZeepCup|null findOneBy(array $criteria, array $orderBy = null)
 * @method ZeepCup[]    findAll()
 * @method ZeepCup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZeepCupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ZeepCup::class);
    }

    //    /**
    //     * @return ZeepCup[] Returns an array of ZeepCup objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('z')
    //            ->andWhere('z.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('z.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ZeepCup
    //    {
    //        return $this->createQueryBuilder('z')
    //            ->andWhere('z.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
