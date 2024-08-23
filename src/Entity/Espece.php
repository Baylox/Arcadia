<?php

namespace App\Entity;

use App\Repository\EspeceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EspeceRepository::class)]
class Espece
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $type_espece = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $evaluation_extinction = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $traits_caracteristiques = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeEspece(): ?string
    {
        return $this->type_espece;
    }

    public function setTypeEspece(string $type_espece): static
    {
        $this->type_espece = $type_espece;

        return $this;
    }

    public function getEvaluationExtinction(): ?string
    {
        return $this->evaluation_extinction;
    }

    public function setEvaluationExtinction(?string $evaluation_extinction): static
    {
        $this->evaluation_extinction = $evaluation_extinction;

        return $this;
    }

    public function getTraitsCaracteristiques(): ?string
    {
        return $this->traits_caracteristiques;
    }

    public function setTraitsCaracteristiques(?string $traits_caracteristiques): static
    {
        $this->traits_caracteristiques = $traits_caracteristiques;

        return $this;
    }
}
