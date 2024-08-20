<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column(length: 255)]
    private ?string $email_user = null;

    #[ORM\Column(length: 255)]
    private ?string $password_user = null;

    #[ORM\Column(length: 50)]
    private ?string $name_user = null;

    #[ORM\Column(length: 50)]
    private ?string $firstname_user = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dob_user = null;

    public function getId(): ?int
    {
        return $this->id_user;
    }

    public function getEmailUser(): ?string
    {
        return $this->email_user;
    }

    public function setEmailUser(string $email_user): static
    {
        $this->email_user = $email_user;

        return $this;
    }

    public function getPasswordUser(): ?string
    {
        return $this->password_user;
    }

    public function setPasswordUser(string $password_user): static
    {
        $this->password_user = $password_user;

        return $this;
    }

    public function getNameUser(): ?string
    {
        return $this->name_user;
    }

    public function setNameUser(string $name_user): static
    {
        $this->name_user = $name_user;

        return $this;
    }

    public function getFirstnameUser(): ?string
    {
        return $this->firstname_user;
    }

    public function setFirstnameUser(string $firstname_user): static
    {
        $this->firstname_user = $firstname_user;

        return $this;
    }

    public function getDobUser(): ?\DateTimeInterface
    {
        return $this->dob_user;
    }

    public function setDobUser(?\DateTimeInterface $dob_user): static
    {
        $this->dob_user = $dob_user;

        return $this;
    }
}
