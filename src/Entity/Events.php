<?php

namespace App\Entity;

use App\Repository\EventsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EventsRepository::class)
 */
class Events
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_date_start_time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_capacity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_email;

    /**
     * @ORM\Column(type="integer")
     */
    private $event_phone_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event_type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEventName(): ?string
    {
        return $this->event_name;
    }

    public function setEventName(string $event_name): self
    {
        $this->event_name = $event_name;

        return $this;
    }

    public function getEventDateStartTime(): ?string
    {
        return $this->event_date_start_time;
    }

    public function setEventDateStartTime(string $event_date_start_time): self
    {
        $this->event_date_start_time = $event_date_start_time;

        return $this;
    }

    public function getEventDescription(): ?string
    {
        return $this->event_description;
    }

    public function setEventDescription(string $event_description): self
    {
        $this->event_description = $event_description;

        return $this;
    }

    public function getEventImage(): ?string
    {
        return $this->event_image;
    }

    public function setEventImage(string $event_image): self
    {
        $this->event_image = $event_image;

        return $this;
    }

    public function getEventCapacity(): ?string
    {
        return $this->event_capacity;
    }

    public function setEventCapacity(string $event_capacity): self
    {
        $this->event_capacity = $event_capacity;

        return $this;
    }

    public function getEventEmail(): ?string
    {
        return $this->event_email;
    }

    public function setEventEmail(string $event_email): self
    {
        $this->event_email = $event_email;

        return $this;
    }

    public function getEventPhoneNumber(): ?int
    {
        return $this->event_phone_number;
    }

    public function setEventPhoneNumber(int $event_phone_number): self
    {
        $this->event_phone_number = $event_phone_number;

        return $this;
    }

    public function getEventAddress(): ?string
    {
        return $this->event_address;
    }

    public function setEventAddress(string $event_address): self
    {
        $this->event_address = $event_address;

        return $this;
    }

    public function getEventUrl(): ?string
    {
        return $this->event_url;
    }

    public function setEventUrl(string $event_url): self
    {
        $this->event_url = $event_url;

        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->event_type;
    }

    public function setEventType(string $event_type): self
    {
        $this->event_type = $event_type;

        return $this;
    }
}
