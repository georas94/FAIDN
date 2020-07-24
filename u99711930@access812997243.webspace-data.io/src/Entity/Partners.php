<?php

namespace App\Entity;

use App\Repository\PartnersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartnersRepository::class)
 */
class Partners
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img10;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getImg1(): ?string
    {
        return $this->img1;
    }

    public function setImg1(string $img1): self
    {
        $this->img1 = $img1;

        return $this;
    }

    public function getImg2(): ?string
    {
        return $this->img2;
    }

    public function setImg2(?string $img2): self
    {
        $this->img2 = $img2;

        return $this;
    }

    public function getImg3(): ?string
    {
        return $this->img3;
    }

    public function setImg3(?string $img3): self
    {
        $this->img3 = $img3;

        return $this;
    }

    public function getImg4(): ?string
    {
        return $this->img4;
    }

    public function setImg4(?string $img4): self
    {
        $this->img4 = $img4;

        return $this;
    }

    public function getImg5(): ?string
    {
        return $this->img5;
    }

    public function setImg5(?string $img5): self
    {
        $this->img5 = $img5;

        return $this;
    }

    public function getImg6(): ?string
    {
        return $this->img6;
    }

    public function setImg6(?string $img6): self
    {
        $this->img6 = $img6;

        return $this;
    }

    public function getImg7(): ?string
    {
        return $this->img7;
    }

    public function setImg7(?string $img7): self
    {
        $this->img7 = $img7;

        return $this;
    }

    public function getImg8(): ?string
    {
        return $this->img8;
    }

    public function setImg8(?string $img8): self
    {
        $this->img8 = $img8;

        return $this;
    }

    public function getImg9(): ?string
    {
        return $this->img9;
    }

    public function setImg9(string $img9): self
    {
        $this->img9 = $img9;

        return $this;
    }

    public function getImg10(): ?string
    {
        return $this->img10;
    }

    public function setImg10(?string $img10): self
    {
        $this->img10 = $img10;

        return $this;
    }
}
