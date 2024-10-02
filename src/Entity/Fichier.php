<?php

namespace App\Entity;

use App\Repository\FichierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FichierRepository::class)]
class Fichier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $visible = null;

    #[ORM\Column(length: 25)]
    private ?string $approved_by = null;

    #[ORM\Column(length: 25)]
    private ?string $published_by = null;

    #[ORM\Column(length: 5)]
    private ?string $type = null;

    #[ORM\Column]
    private ?int $taille = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'fichiers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;

        return $this;
    }

    public function getApprovedBy(): ?string
    {
        return $this->approved_by;
    }

    public function setApprovedBy(string $approved_by): static
    {
        $this->approved_by = $approved_by;

        return $this;
    }

    public function getPublishedBy(): ?string
    {
        return $this->published_by;
    }

    public function setPublishedBy(string $published_by): static
    {
        $this->published_by = $published_by;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }
}
