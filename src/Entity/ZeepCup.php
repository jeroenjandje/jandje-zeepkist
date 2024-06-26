<?php

namespace App\Entity;

use App\Repository\ZeepCupRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'zeep_cups')]
#[ORM\Entity(repositoryClass: ZeepCupRepository::class)]
class ZeepCup
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

	public function __construct($title)
	{
		$this->title = $title;
	}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }
}
