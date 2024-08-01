<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 500)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $picture_1 = null;

    #[ORM\Column(length: 255)]
    private ?string $picture_2 = null;

    #[ORM\Column(length: 255)]
    private ?string $picture_3 = null;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture1(): ?string
    {
        return $this->picture_1;
    }

    public function setPicture1(string $picture_1): static
    {
        $this->picture_1 = $picture_1;

        return $this;
    }

    public function getPicture2(): ?string
    {
        return $this->picture_2;
    }

    public function setPicture2(string $picture_2): static
    {
        $this->picture_2 = $picture_2;

        return $this;
    }

    public function getPicture3(): ?string
    {
        return $this->picture_3;
    }

    public function setPicture3(string $picture_3): static
    {
        $this->picture_3 = $picture_3;

        return $this;
    }
}
