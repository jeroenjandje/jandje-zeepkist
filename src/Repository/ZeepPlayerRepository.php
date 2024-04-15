<?php

namespace App\Repository;

use App\Entity\ZeepPlayer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ZeepPlayer>
 *
 * @method ZeepPlayer|null find($id, $lockMode = null, $lockVersion = null)
 * @method ZeepPlayer|null findOneBy(array $criteria, array $orderBy = null)
 * @method ZeepPlayer[]    findAll()
 * @method ZeepPlayer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZeepPlayerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ZeepPlayer::class);
    }

    //    /**
    //     * @return ZeepPlayer[] Returns an array of ZeepPlayer objects
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

    //    public function findOneBySomeField($value): ?ZeepPlayer
    //    {
    //        return $this->createQueryBuilder('z')
    //            ->andWhere('z.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
