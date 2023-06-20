<?php

namespace App\Entity;

use App\Repository\HistoriaGierRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HistoriaGierRepository::class)]
class HistoriaGier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $data_gry = null;

    #[ORM\ManyToOne(inversedBy: 'DoHistoriiGier')]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $User = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataGry(): ?string
    {
        return $this->data_gry->format('Y-m-d H:i:s');
    }

    public function setDataGry(\DateTimeInterface $data_gry): static
    {
        $this->data_gry = $data_gry;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->User->getId();
    }

    public function setUser(?user $User): static
    {
        $this->User = $User;

        return $this;
    }
}
