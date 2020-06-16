<?php

namespace App\Repository;

use App\Entity\Wallpaper;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Wallpaper|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wallpaper|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wallpaper[]    findAll()
 * @method Wallpaper[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WallpaperRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wallpaper::class);
    }

    /**
    * @return Wallpaper[] Returns an array of Wallpaper objects
    */
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @param $value
     * @return Wallpaper|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function findOneBySomeField($value): ?Wallpaper
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    /**
     * @param Wallpaper $wallpaper
     */
    public function save(Wallpaper $wallpaper)
    {
    }
}
