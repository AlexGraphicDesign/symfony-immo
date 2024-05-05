<?php

namespace App\Entity;

use App\Repository\ProgramRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProgramRepository::class)]
final class Program extends BaseEntity
{
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $content = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $excerpt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $constructionStart = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $constructionEnd = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $actability = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column]
    private ?float $latitude = null;

    #[ORM\Column]
    private ?float $longitude = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $delivery = null;

    #[ORM\Column]
    private ?bool $indexable = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getExcerpt(): ?string
    {
        return $this->excerpt;
    }

    public function setExcerpt(?string $excerpt): static
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    public function getConstructionStart(): ?\DateTimeImmutable
    {
        return $this->constructionStart;
    }

    public function setConstructionStart(?\DateTimeImmutable $constructionStart): static
    {
        $this->constructionStart = $constructionStart;

        return $this;
    }

    public function getConstructionEnd(): ?\DateTimeImmutable
    {
        return $this->constructionEnd;
    }

    public function setConstructionEnd(?\DateTimeImmutable $constructionEnd): static
    {
        $this->constructionEnd = $constructionEnd;

        return $this;
    }

    public function getActability(): ?\DateTimeImmutable
    {
        return $this->actability;
    }

    public function setActability(?\DateTimeImmutable $actability): static
    {
        $this->actability = $actability;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getDelivery(): ?\DateTimeImmutable
    {
        return $this->delivery;
    }

    public function setDelivery(?\DateTimeImmutable $delivery): static
    {
        $this->delivery = $delivery;

        return $this;
    }

    public function isIndexable(): ?bool
    {
        return $this->indexable;
    }

    public function setIndexable(bool $indexable): static
    {
        $this->indexable = $indexable;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
