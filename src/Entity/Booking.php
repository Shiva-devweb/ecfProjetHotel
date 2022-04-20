<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="booking", indexes={@ORM\Index(name="IDX_E00CEDDE4FFCB518", columns={"suite_id"}), @ORM\Index(name="IDX_E00CEDDEA76ED395", columns={"user_id"}), @ORM\Index(name="IDX_E00CEDDE3243BB18", columns={"hotel_id"})})
 * @ORM\Entity
 */
class Booking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="booking_start", type="date", nullable=false)
     */
    private $bookingStart;

    /**
     * @var dateinterval
     *
     * @ORM\Column(name="nb_night", type="dateinterval", nullable=false)
     */
    private $nbNight;

    /**
     * @var \Suite
     *
     * @ORM\ManyToOne(targetEntity="Suite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="suite_id", referencedColumnName="id")
     * })
     */
    private $suite;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hotel_id", referencedColumnName="id")
     * })
     */
    private $hotel;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookingStart(): ?\DateTimeInterface
    {
        return $this->bookingStart;
    }

    public function setBookingStart(\DateTimeInterface $bookingStart): self
    {
        $this->bookingStart = $bookingStart;

        return $this;
    }

    public function getNbNight(): ?\DateInterval
    {
        return $this->nbNight;
    }

    public function setNbNight(\DateInterval $nbNight): self
    {
        $this->nbNight = $nbNight;

        return $this;
    }

    public function getSuite(): ?Suite
    {
        return $this->suite;
    }

    public function setSuite(?Suite $suite): self
    {
        $this->suite = $suite;

        return $this;
    }

    public function getHotel(): ?Hotel
    {
        return $this->hotel;
    }

    public function setHotel(?Hotel $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
