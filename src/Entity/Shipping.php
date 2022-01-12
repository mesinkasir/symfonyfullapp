<?php

namespace App\Entity;

use App\Repository\ShippingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ShippingRepository::class)
 */
class Shipping
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $sent_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $from_location;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $to_location;

    /**
     * @ORM\Column(type="date")
     */
    private $arrival_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lots_of_stuff;

    /**
     * @ORM\Column(type="float")
     */
    private $total_amount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSentDate(): ?\DateTimeInterface
    {
        return $this->sent_date;
    }

    public function setSentDate(\DateTimeInterface $sent_date): self
    {
        $this->sent_date = $sent_date;

        return $this;
    }

    public function getFromLocation(): ?string
    {
        return $this->from_location;
    }

    public function setFromLocation(string $from_location): self
    {
        $this->from_location = $from_location;

        return $this;
    }

    public function getToLocation(): ?string
    {
        return $this->to_location;
    }

    public function setToLocation(string $to_location): self
    {
        $this->to_location = $to_location;

        return $this;
    }

    public function getArrivalDate(): ?\DateTimeInterface
    {
        return $this->arrival_date;
    }

    public function setArrivalDate(\DateTimeInterface $arrival_date): self
    {
        $this->arrival_date = $arrival_date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLotsOfStuff(): ?string
    {
        return $this->lots_of_stuff;
    }

    public function setLotsOfStuff(string $lots_of_stuff): self
    {
        $this->lots_of_stuff = $lots_of_stuff;

        return $this;
    }

    public function getTotalAmount(): ?float
    {
        return $this->total_amount;
    }

    public function setTotalAmount(float $total_amount): self
    {
        $this->total_amount = $total_amount;

        return $this;
    }
}
