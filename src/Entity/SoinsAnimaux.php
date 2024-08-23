<?php

namespace App\Entity;

use App\Repository\SoinsAnimauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SoinsAnimauxRepository::class)]
class SoinsAnimaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $description_soin = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_soin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionSoin(): ?string
    {
        return $this->description_soin;
    }

    public function setDescriptionSoin(string $description_soin): static
    {
        $this->description_soin = $description_soin;

        return $this;
    }

    public function getDateSoin(): ?\DateTimeInterface
    {
        return $this->date_soin;
    }

    public function setDateSoin(\DateTimeInterface $date_soin): static
    {
        $this->date_soin = $date_soin;

        return $this;
    }
}
