<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
#[ApiResource]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 512)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $rating = null;

    #[ORM\Column(length: 255)]
    private ?string $steam_game_id = null;

    #[ORM\Column(length: 255)]
    private ?string $auteur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(string $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getSteamGameId(): ?string
    {
        return $this->steam_game_id;
    }

    public function setSteamGameId(string $steam_game_id): static
    {
        $this->steam_game_id = $steam_game_id;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }
}


