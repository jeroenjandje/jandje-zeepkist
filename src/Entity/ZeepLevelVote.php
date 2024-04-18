<?php

namespace App\Entity;

use App\Repository\ZeepLevelRepository;
use App\Repository\ZeepLevelVoteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Table(name: 'zeeplevel_votes')]
#[ORM\UniqueConstraint(name: "unique_zeeplevel_zeepplayer", columns: ["zeep_player_id", "zeep_level_id"])]
#[ORM\Entity(repositoryClass: ZeepLevelVoteRepository::class)]
class ZeepLevelVote
{

    #[ORM\Column(type: "integer")]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    private int $id;

    #[ORM\ManyToOne(targetEntity: ZeepPlayer::class, inversedBy: "zeepLevelVotes")]
    private ZeepPlayer $zeepPlayer;

    #[ORM\ManyToOne(targetEntity: ZeepLevel::class, inversedBy: "zeepLevelVotes")]
    private ZeepLevel $zeepLevel;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank]
    private int $value;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getZeepPlayer(): ZeepPlayer
    {
        return $this->zeepPlayer;
    }

    public function setZeepPlayer(ZeepPlayer $zeepPlayer): void
    {
        $this->zeepPlayer = $zeepPlayer;
    }

    public function getZeepLevel(): ZeepLevel
    {
        return $this->zeepLevel;
    }

    public function setZeepLevel(ZeepLevel $zeepLevel): void
    {
        $this->zeepLevel = $zeepLevel;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
    }

}