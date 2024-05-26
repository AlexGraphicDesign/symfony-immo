<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Utils\BaseEntity;
use App\Entity\Utils\Timestamp;
use App\Enum\Program\Status;
use App\Repository\ProgramRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: ProgramRepository::class)]
final class Program extends BaseEntity
{
    use Timestamp;

    #[ORM\Column(length: 255)]
    #[Groups(['program'])]
    private string $name;

    #[ORM\Column(length: 255)]
    #[Groups(['program'])]
    private string $title;

    #[ORM\Column(length: 255)]
    #[Groups(['program'])]
    private string $slug;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['program'])]
    private ?string $description = null;

    #[ORM\Column(type: Types::STRING, nullable: true)]
    #[Groups(['program'])]
    private ?string $featuredImage = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['program'])]
    private ?string $content = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['program'])]
    private ?string $excerpt = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['program'])]
    private ?\DateTimeImmutable $actability = null;

    #[ORM\Column(type: Types::STRING, length: 255, nullable: true)]
    #[Groups(['program'])]
    private ?string $address = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    #[Groups(['program'])]
    private ?float $latitude = null;

    #[ORM\Column(type: Types::FLOAT, nullable: true)]
    #[Groups(['program'])]
    private ?float $longitude = null;

    #[ORM\OneToOne(targetEntity: ProgramDetails::class, mappedBy: 'program', cascade: ['persist', 'remove'])]
    #[Groups(['program'])]
    private ?ProgramDetails $programDetails = null;

    #[ORM\Column(type: Types::BOOLEAN)]
    #[Groups(['program'])]
    private ?bool $indexable = null;

    #[ORM\Column(length: 255)]
    #[Groups(['program'])]
    private ?Status $status = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): string
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

    public function getfeaturedImage(): ?string
    {
        return $this->featuredImage;
    }

    public function setFeaturedImage(?string $featuredImage): static
    {
        $this->featuredImage = $featuredImage;

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

    public function getProgramDetails(): ?ProgramDetails
    {
        return $this->programDetails;
    }

    public function setProgramDetails(ProgramDetails $programDetails): static
    {
        $this->programDetails = $programDetails;

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

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(Status $status): static
    {
        $this->status = $status;

        return $this;
    }
}
