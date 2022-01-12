<?php

namespace App\Entity;

use App\Repository\HomepageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomepageRepository::class)
 */
class Homepage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $decription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cover;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section1title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section1cover;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section1content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section2title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section2cover;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section2content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $footer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $footercover;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $footercontent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDecription(): ?string
    {
        return $this->decription;
    }

    public function setDecription(string $decription): self
    {
        $this->decription = $decription;

        return $this;
    }

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(string $cover): self
    {
        $this->cover = $cover;

        return $this;
    }

    public function getSection1title(): ?string
    {
        return $this->section1title;
    }

    public function setSection1title(string $section1title): self
    {
        $this->section1title = $section1title;

        return $this;
    }

    public function getSection1cover(): ?string
    {
        return $this->section1cover;
    }

    public function setSection1cover(string $section1cover): self
    {
        $this->section1cover = $section1cover;

        return $this;
    }

    public function getSection1content(): ?string
    {
        return $this->section1content;
    }

    public function setSection1content(string $section1content): self
    {
        $this->section1content = $section1content;

        return $this;
    }

    public function getSection2title(): ?string
    {
        return $this->section2title;
    }

    public function setSection2title(string $section2title): self
    {
        $this->section2title = $section2title;

        return $this;
    }

    public function getSection2cover(): ?string
    {
        return $this->section2cover;
    }

    public function setSection2cover(string $section2cover): self
    {
        $this->section2cover = $section2cover;

        return $this;
    }

    public function getSection2content(): ?string
    {
        return $this->section2content;
    }

    public function setSection2content(string $section2content): self
    {
        $this->section2content = $section2content;

        return $this;
    }

    public function getFooter(): ?string
    {
        return $this->footer;
    }

    public function setFooter(string $footer): self
    {
        $this->footer = $footer;

        return $this;
    }

    public function getFootercover(): ?string
    {
        return $this->footercover;
    }

    public function setFootercover(string $footercover): self
    {
        $this->footercover = $footercover;

        return $this;
    }

    public function getFootercontent(): ?string
    {
        return $this->footercontent;
    }

    public function setFootercontent(string $footercontent): self
    {
        $this->footercontent = $footercontent;

        return $this;
    }
}
