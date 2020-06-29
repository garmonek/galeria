<?php
/**
 * Wallpaper Repository.
 */

namespace App\Repository;

use App\Entity\Wallpaper;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Wallpaper|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wallpaper|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wallpaper[]    findAll()
 * @method Wallpaper[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WallpaperRepository extends ServiceEntityRepository
{
    /**
     * Items per page.
     *
     * Use constants to define configuration options that rarely change instead
     * of specifying them in app/config/config.yml.
     * See https://symfony.com/doc/current/best_practices.html#configuration
     *
     * @constant int
     */
    const PAGINATOR_ITEMS_PER_PAGE = 10;

    /**
     * WallpaperRepository constructor.
     *
     * @param ManagerRegistry $registry Manager Registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wallpaper::class);
    }

    /**
     * Query all records.
     *
     * @return \Doctrine\ORM\QueryBuilder Query builder
     */
    public function queryAll(): QueryBuilder
    {
        return $this->getOrCreateQueryBuilder()
            ->orderBy('wallpaper.updatedAt', 'DESC');
    }

    /**
     * Save record.
     *
     * @param \App\Entity\Wallpaper $wallpaper Wallpaper entity
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(Wallpaper $wallpaper): void
    {
        $this->_em->persist($wallpaper);
        $this->_em->flush($wallpaper);
    }

    /**
     * Delete record.
     *
     * @param \App\Entity\Wallpaper $wallpaper Wallpaper entity
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function delete(Wallpaper $wallpaper): void
    {
        $this->_em->remove($wallpaper);
        $this->_em->flush($wallpaper);
    }

    /**
     * Get or create new query builder.
     *
     * @param \Doctrine\ORM\QueryBuilder|null $queryBuilder Query builder
     *
     * @return \Doctrine\ORM\QueryBuilder Query builder
     */
    private function getOrCreateQueryBuilder(QueryBuilder $queryBuilder = null): QueryBuilder
    {
        return $queryBuilder ?? $this->createQueryBuilder('wallpaper');
    }
}
