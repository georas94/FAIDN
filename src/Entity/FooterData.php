<?php

namespace App\Entity;

use App\Repository\FooterDataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FooterDataRepository::class)
 */
class FooterData
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
    private $messenger;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $instagram;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkedIn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $findUs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $refPrefecture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessenger(): ?string
    {
        return $this->messenger;
    }

    public function setMessenger(string $messenger): self
    {
        $this->messenger = $messenger;

        return $this;
    }

    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    public function setInstagram(string $instagram): self
    {
        $this->instagram = $instagram;

        return $this;
    }

    public function getLinkedIn(): ?string
    {
        return $this->linkedIn;
    }

    public function setLinkedIn(string $linkedIn): self
    {
        $this->linkedIn = $linkedIn;

        return $this;
    }

    public function getFindUs(): ?string
    {
        return $this->findUs;
    }

    public function setFindUs(string $findUs): self
    {
        $this->findUs = $findUs;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->tel1;
    }

    public function setTel1(string $tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getTel3(): ?string
    {
        return $this->tel3;
    }

    public function setTel3(string $tel3): self
    {
        $this->tel3 = $tel3;

        return $this;
    }

    public function getRefPrefecture(): ?string
    {
        return $this->refPrefecture;
    }

    public function setRefPrefecture(string $refPrefecture): self
    {
        $this->refPrefecture = $refPrefecture;

        return $this;
    }
}
