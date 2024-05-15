<?php

declare(strict_types=1);

namespace App\Entity\Utils;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV7;
#[ORM\MappedSuperclass]
abstract class BaseEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: Types::INTEGER)]
    private ?int $id = null;

    #[ORM\Column(type: Types::STRING, unique: true, length: 32)]
    private ?string $uuid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    #[ORM\PrePersist]
    public function getUuid(): static
    {
        if (!$this->uuid) {
            $this->uuid = (new UuidV7())->toBase32();
        }

        return $this;
    }
}
