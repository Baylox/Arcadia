<?php

namespace App\Entity;

use App\Repository\AlimentationAnimauxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlimentationAnimauxRepository::class)]
class AlimentationAnimaux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $nom_nourriture = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 4)]
    private ?string $quantite_nourriture = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_alimentation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commentaire_veterinaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomNourriture(): ?string
    {
        return $this->nom_nourriture;
    }

    public function setNomNourriture(string $nom_nourriture): static
    {
        $this->nom_nourriture = $nom_nourriture;

        return $this;
    }

    public function getQuantiteNourriture(): ?string
    {
        return $this->quantite_nourriture;
    }

    public function setQuantiteNourriture(string $quantite_nourriture): static
    {
        $this->quantite_nourriture = $quantite_nourriture;

        return $this;
    }

    public function getDateAlimentation(): ?\DateTimeInterface
    {
        return $this->date_alimentation;
    }

    public function setDateAlimentation(\DateTimeInterface $date_alimentation): static
    {
        $this->date_alimentation = $date_alimentation;

        return $this;
    }

    public function getCommentaireVeterinaire(): ?string
    {
        return $this->commentaire_veterinaire;
    }

    public function setCommentaireVeterinaire(?string $commentaire_veterinaire): static
    {
        $this->commentaire_veterinaire = $commentaire_veterinaire;

        return $this;
    }
}
