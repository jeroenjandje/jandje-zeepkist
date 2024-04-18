<?php

namespace App\Entity;

use App\Repository\ZeepLevelRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ZeepLevelRepository::class)]
#[ORM\Table(name: "zeeplevels")]
class ZeepLevel
{

    #[ORM\Column(type: "integer")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    private int $id;

    #[ORM\Column(type: "string")]
    #[Assert\NotBlank]
    private string $name;

    #[ORM\Column(type: "string")]
    #[Assert\NotBlank]
    private string $workshopId;

    #[ORM\OneToMany(targetEntity: ZeepLevelVote::class, mappedBy: "zeepLevel")]
    private Collection $zeepLevelVotes;

    #[ORM\Column(type: "integer")]
    #[Assert\NotNull]
    private int $totalVotes;

    #[ORM\Column(type: "integer")]
    #[Assert\NotNull]
    private int $totalPoints;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getWorkshopId(): string
    {
        return $this->workshopId;
    }

    public function setWorkshopId(string $workshopId): void
    {
        $this->workshopId = $workshopId;
    }

    public function getTotalVotes(): int
    {
        return $this->totalVotes;
    }

    public function setTotalVotes(int $totalVotes): void
    {
        $this->totalVotes = $totalVotes;
    }

    public function getTotalPoints(): int
    {
        return $this->totalPoints;
    }

    public function setTotalPoints(int $totalPoints): void
    {
        $this->totalPoints = $totalPoints;
    }
}