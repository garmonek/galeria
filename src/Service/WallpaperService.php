<?php
/**
 * Wallpaper service.
 */

namespace App\Service;

use App\Entity\Wallpaper;
use App\Repository\WallpaperRepository;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * Class WallpaperService.
 */
class WallpaperService
{
    /**
     * WallpaperService constructor.
     *
     * @param \App\Repository\WallpaperRepository     $wallpaperRepository Wallpaper repository
     * @param \Knp\Component\Pager\PaginatorInterface $paginator           Paginator
     */
    public function __construct(WallpaperRepository $wallpaperRepository, PaginatorInterface $paginator)
    {
        $this->wallpaperRepository = $wallpaperRepository;
        $this->paginator = $paginator;
    }

    /**
     * Create paginated list.
     *
     * @param int $page Page number
     *
     * @return \Knp\Component\Pager\Pagination\PaginationInterface Paginated list
     */
    public function createPaginatedList(int $page): PaginationInterface
    {
        return $this->paginator->paginate(
            $this->wallpaperRepository->queryAll(),
            $page,
            WallpaperRepository::PAGINATOR_ITEMS_PER_PAGE
        );
    }

    /**
     * Save wallpaper.
     *
     * @param \App\Entity\Wallpaper $wallpaper Wallpaper entity
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(Wallpaper $wallpaper): void
    {
        $this->wallpaperRepository->save($wallpaper);
    }

    /**
     * Delete wallpaper.
     *
     * @param \App\Entity\Wallpaper $wallpaper Wallpaper entity
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function delete(Wallpaper $wallpaper): void
    {
        $this->wallpaperRepository->delete($wallpaper);
    }

    /**
     * Wallpaper repository.
     *
     * @var \App\Repository\WallpaperRepository
     */
    private WallpaperRepository $wallpaperRepository;

    /**
     * Paginator.
     *
     * @var \Knp\Component\Pager\PaginatorInterface
     */
    private PaginatorInterface $paginator;
}
