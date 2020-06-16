<?php
/**
 * Wallpaper entity.
 */

namespace App\Entity;

use App\Repository\WallpaperRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Wallpaper.
 *
 * @ORM\Entity(repositoryClass=WallpaperRepository::class)
 * @ORM\Table(name="wallpapers")
 */
class Wallpaper
{
    /**
     * Primary key.
     *
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Filename.
     *
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     length=255,
     * )
     */
    private $filename;

    /**
     * Slug.
     *
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     length=255,
     *     nullable=true
     * )
     */
    private $slug;

    /**
     * Getter for Id.
     *
     * @return int|null Result
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Getter for Filename.
     *
     * @return string|null Filename
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * Setter for Filename.
     *
     * @param string $filename Filename
     */
    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Getter for Slug.
     *
     * @return string|null Slug
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * Setter for Slug.
     *
     * @param string $slug Slug
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
