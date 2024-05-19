<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Utils\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProgramDetailsRepository;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: ProgramDetailsRepository::class)]
final class ProgramDetails extends BaseEntity
{
    #[ORM\OneToOne(targetEntity: Program::class, inversedBy: 'programDetails')]
    #[ORM\JoinColumn(name: 'program_id', referencedColumnName: 'id', nullable: false)]
    private ?Program $program = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['program'])]
    private ?string $urlPromoter = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['program'])]
    private ?\DateTimeImmutable $constructionStart = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['program'])]
    private ?\DateTimeImmutable $constructionEnd = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['program'])]
    private ?\DateTimeImmutable $delivery = null;

    public function getProgram(): ?Program
    {
        return $this->program;
    }

    public function setProgram(?Program $program): static
    {
        $this->program = $program;

        return $this;
    }

    public function getUrlPromoter(): string
    {
        return $this->urlPromoter;
    }

    public function setUrlPromoter(string $urlPromoter): static
    {
        $this->urlPromoter = $urlPromoter;

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

    public function getDelivery(): ?\DateTimeImmutable
    {
        return $this->delivery;
    }

    public function setDelivery(?\DateTimeImmutable $delivery): static
    {
        $this->delivery = $delivery;

        return $this;
    }
}
