<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use App\Repository\OpeningDateRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OpeningDateRepository::class)]
#[GetCollection]
#[Post(security: "is_granted('ROLE_ADMIN')")]
#[Get]
#[Post(security: "is_granted('ROLE_ADMIN')")]
class OpeningDate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 24)]
    private ?string $day = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $OpeningTime = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $ClosureTime = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDay(): ?string
    {
        return $this->day;
    }

    public function setDay(string $day): static
    {
        $this->day = $day;

        return $this;
    }

    public function getOpeningTime(): ?\DateTimeInterface
    {
        return $this->OpeningTime;
    }

    public function setOpeningTime(\DateTimeInterface $OpeningTime): static
    {
        $this->OpeningTime = $OpeningTime;

        return $this;
    }

    public function getClosureTime(): ?\DateTimeInterface
    {
        return $this->ClosureTime;
    }

    public function setClosureTime(\DateTimeInterface $ClosureTime): static
    {
        $this->ClosureTime = $ClosureTime;

        return $this;
    }
}
