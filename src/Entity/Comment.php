<?php
/**
 * Comment entity.
 */

namespace App\Entity;

use App\Repository\CommentRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class entity.
 *
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
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
     * @ORM\Column(type="integer")
     */
    private $wallpaperId;

    /**
     * Created at.
     *
     * @var DateTimeInterface
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * Content.
     *
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * Email.
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * Nick.
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $nick;

    /**
     * Wallpaper.
     *
     * @ORM\ManyToOne(targetEntity=Wallpaper::class, inversedBy="comments")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     */
    private $wallpaper;

    /**
     * Comment constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * Getter for Id.
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Getter for createdAt.
     *
     * @return DateTimeInterface|null Created at
     */
    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Setter for createdAt.
     *
     * @param DateTimeInterface $createdAt Created at
     */
    public function setCreatedAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Getter for Content.
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Setter for Content.
     *
     * @param string $content
     * @return $this
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Getter for Email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Setter for Email.
     *
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Getter for Nick.
     *
     * @return string|null
     */
    public function getNick(): ?string
    {
        return $this->nick;
    }

    /**
     * Setter for Nick.
     *
     * @param string $nick
     * @return $this
     */
    public function setNick(string $nick): self
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Getter for Wallpaper.
     *
     * @return Wallpaper|null
     */
    public function getWallpaper(): ?Wallpaper
    {
        return $this->wallpaper;
    }

    /**
     * Setter for Wallpaper.
     *
     * @param Wallpaper|null $wallpaper
     * @return $this
     */
    public function setWallpaper(?Wallpaper $wallpaper): self
    {
        $this->wallpaper = $wallpaper;

        return $this;
    }

    /**
     * Getter for WallpaperId.
     *
     * @return int|null
     */
    public function getWallpaperId(): ?int
    {
        return $this->wallpaperId;
    }

    /**
     * Setter for WallpaperId.
     *
     * @param int $wallpaperId
     *
     * @return $this
     */
    public function setWallpaperId(int $wallpaperId): self
    {
        $this->wallpaperId = $wallpaperId;

        return $this;
    }
}
