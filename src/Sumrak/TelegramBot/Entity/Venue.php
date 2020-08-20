<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class Venue
 * This object represents a venue.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class Venue implements EntityInterface
{
    /**
     * Venue location
     *
     * @var Location
     */
    private $location;

    /**
     * Name of the venue
     *
     * @var string
     */
    private $title;

    /**
     * Address of the venue
     *
     * @var string
     */
    private $address;

    /**
     * Optional. Foursquare identifier of the venue
     *
     * @var string|null
     */
    private $foursquareId;

    /**
     * Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”,
     * “arts_entertainment/aquarium” or “food/icecream”.)
     *
     * @var string|null
     */
    private $foursquareType;

    /**
     * Venue location
     *
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * Venue location
     *
     * @param Location $location
     *
     * @return void
     */
    public function setLocation(Location $location): void
    {
        $this->location = $location;
    }

    /**
     * Name of the venue
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Name of the venue
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Address of the venue
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Address of the venue
     *
     * @param string $address
     *
     * @return void
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * Optional. Foursquare identifier of the venue
     *
     * @return string|null
     */
    public function getFoursquareId(): ?string
    {
        return $this->foursquareId;
    }

    /**
     * Optional. Foursquare identifier of the venue
     *
     * @param string|null $foursquareId
     *
     * @return void
     */
    public function setFoursquareId(?string $foursquareId): void
    {
        $this->foursquareId = $foursquareId;
    }

    /**
     * Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”,
     * “arts_entertainment/aquarium” or “food/icecream”.)
     *
     * @return string|null
     */
    public function getFoursquareType(): ?string
    {
        return $this->foursquareType;
    }

    /**
     * Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”,
     * “arts_entertainment/aquarium” or “food/icecream”.)
     *
     * @param string|null $foursquareType
     *
     * @return void
     */
    public function setFoursquareType(?string $foursquareType): void
    {
        $this->foursquareType = $foursquareType;
    }
}
