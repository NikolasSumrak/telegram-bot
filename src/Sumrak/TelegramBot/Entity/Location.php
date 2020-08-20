<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class Location
 * This object represents a point on the map.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class Location implements EntityInterface
{
    /**
     * Longitude as defined by sender
     *
     * @var float
     */
    private $longitude;

    /**
     * Latitude as defined by sender
     *
     * @var float
     */
    private $latitude;

    /**
     * Longitude as defined by sender
     *
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Longitude as defined by sender
     *
     * @param float $longitude
     *
     * @return void
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * Latitude as defined by sender
     *
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Latitude as defined by sender
     *
     * @param float $latitude
     *
     * @return void
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }
}
