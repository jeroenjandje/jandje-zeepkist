<?php

namespace App\Entity;

use App\Repository\ZeepPlayerRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "zeepplayers")]
#[ORM\Entity(repositoryClass: ZeepPlayerRepository::class)]
class ZeepPlayer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\OneToMany(targetEntity: ZeepLevelVote::class, mappedBy: "zeepLevel")]
    private Collection $zeepLevelVotes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }
}
