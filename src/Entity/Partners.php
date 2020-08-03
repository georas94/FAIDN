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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img11;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img12;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img14;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img15;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img16;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img17;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img18;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img19;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img20;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img21;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img22;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img23;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img24;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img25;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img26;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img27;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img28;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img29;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img30;

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

    public function getImg11(): ?string
    {
        return $this->img11;
    }

    public function setImg11(?string $img11): self
    {
        $this->img11 = $img11;

        return $this;
    }

    public function getImg12(): ?string
    {
        return $this->img12;
    }

    public function setImg12(?string $img12): self
    {
        $this->img12 = $img12;

        return $this;
    }

    public function getImg13(): ?string
    {
        return $this->img13;
    }

    public function setImg13(?string $img13): self
    {
        $this->img13 = $img13;

        return $this;
    }

    public function getImg14(): ?string
    {
        return $this->img14;
    }

    public function setImg14(?string $img14): self
    {
        $this->img14 = $img14;

        return $this;
    }

    public function getImg15(): ?string
    {
        return $this->img15;
    }

    public function setImg15(?string $img15): self
    {
        $this->img15 = $img15;

        return $this;
    }

    public function getImg16(): ?string
    {
        return $this->img16;
    }

    public function setImg16(?string $img16): self
    {
        $this->img16 = $img16;

        return $this;
    }

    public function getImg17(): ?string
    {
        return $this->img17;
    }

    public function setImg17(?string $img17): self
    {
        $this->img17 = $img17;

        return $this;
    }

    public function getImg18(): ?string
    {
        return $this->img18;
    }

    public function setImg18(?string $img18): self
    {
        $this->img18 = $img18;

        return $this;
    }

    public function getImg19(): ?string
    {
        return $this->img19;
    }

    public function setImg19(?string $img19): self
    {
        $this->img19 = $img19;

        return $this;
    }

    public function getImg20(): ?string
    {
        return $this->img20;
    }

    public function setImg20(?string $img20): self
    {
        $this->img20 = $img20;

        return $this;
    }

    public function getImg21(): ?string
    {
        return $this->img21;
    }

    public function setImg21(?string $img21): self
    {
        $this->img21 = $img21;

        return $this;
    }

    public function getImg22(): ?string
    {
        return $this->img22;
    }

    public function setImg22(?string $img22): self
    {
        $this->img22 = $img22;

        return $this;
    }

    public function getImg23(): ?string
    {
        return $this->img23;
    }

    public function setImg23(?string $img23): self
    {
        $this->img23 = $img23;

        return $this;
    }

    public function getImg24(): ?string
    {
        return $this->img24;
    }

    public function setImg24(?string $img24): self
    {
        $this->img24 = $img24;

        return $this;
    }

    public function getImg25(): ?string
    {
        return $this->img25;
    }

    public function setImg25(?string $img25): self
    {
        $this->img25 = $img25;

        return $this;
    }

    public function getImg26(): ?string
    {
        return $this->img26;
    }

    public function setImg26(?string $img26): self
    {
        $this->img26 = $img26;

        return $this;
    }

    public function getImg27(): ?string
    {
        return $this->img27;
    }

    public function setImg27(?string $img27): self
    {
        $this->img27 = $img27;

        return $this;
    }

    public function getImg28(): ?string
    {
        return $this->img28;
    }

    public function setImg28(?string $img28): self
    {
        $this->img28 = $img28;

        return $this;
    }

    public function getImg29(): ?string
    {
        return $this->img29;
    }

    public function setImg29(?string $img29): self
    {
        $this->img29 = $img29;

        return $this;
    }

    public function getImg30(): ?string
    {
        return $this->img30;
    }

    public function setImg30(?string $img30): self
    {
        $this->img30 = $img30;

        return $this;
    }
}
