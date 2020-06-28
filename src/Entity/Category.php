<?php
/**
 * Category entity.
 */

namespace App\Entity;

use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Category.
 *
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 * @ORM\Table(name="categories")
 *
 * @UniqueEntity(fields={"title"})
 */
class Category
{
    /**
     * Primary key.
     *
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Created at.
     *
     * @var DateTimeInterface
     *
     * @ORM\Column(type="datetime")
     *
     * @Assert\Type(type="\DateTimeInterface")
     *
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * Updated at.
     *
     * @var DateTimeInterface
     *
     * @ORM\Column(type="datetime")
     *
     * @Assert\Type(type="\DateTimeInterface")
     *
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * Title.
     *
     * @var string
     *
     * @ORM\Column(
     *     type="string",
     *     length=64,
     * )
     *
     * @Assert\Type(type="string")
     * @Assert\NotBlank
     * @Assert\Length(
     *     min="3",
     *     max="64",
     * )
     *
     */
    private $title;

    /**
     * Wallpapers
     *
     * @var \Doctrine\Common\Collections\ArrayCollection|\App\Entity\Wallpaper[] $wallpapers Wallpapers
     *
     * @ORM\OneToMany(targetEntity=Wallpaper::class, mappedBy="category")
     */
    private $wallpapers;

    /**
     * Category constructor.
     */
    public function __construct()
    {
        $this->wallpapers = new ArrayCollection();
    }

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
     * Getter for Created At.
     *
     * @return \DateTimeInterface|null Created at
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Setter for Created at.
     *
     * @param \DateTimeInterface $createdAt Created at
     */
    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Getter for Updated at.
     *
     * @return \DateTimeInterface|null Updated at
     */
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * Setter for Updated at.
     *
     * @param \DateTimeInterface $updatedAt Updated at
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Getter for Title.
     *
     * @return string|null Title
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Setter for Title.
     *
     * @param string $title Title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Getter for Wallpapers.
     *
     * @return Collection|Wallpaper[]
     */
    public function getWallpapers(): Collection
    {
        return $this->wallpapers;
    }

    /**
     * Adder Wallpapers.
     *
     * @param Wallpaper $wallpaper
     * @return $this
     */
    public function addWallpaper(Wallpaper $wallpaper): self
    {
        if (!$this->wallpapers->contains($wallpaper)) {
            $this->wallpapers[] = $wallpaper;
            $wallpaper->setCategory($this);
        }

        return $this;
    }

    /**
     * Removal Wallpapers.
     *
     * @param Wallpaper $wallpaper
     * @return $this
     */
    public function removeWallpaper(Wallpaper $wallpaper): self
    {
        if ($this->wallpapers->contains($wallpaper)) {
            $this->wallpapers->removeElement($wallpaper);
            // set the owning side to null (unless already changed)
            if ($wallpaper->getCategory() === $this) {
                $wallpaper->setCategory(null);
            }
        }

        return $this;
    }
}
