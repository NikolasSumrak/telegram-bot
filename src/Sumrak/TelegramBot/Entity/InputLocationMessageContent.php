<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InputLocationMessageContent
 * Represents the content of a location message to be sent as the result of an inline query.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InputLocationMessageContent implements InputMessageContentInterface
{
    /**
     * Latitude of the location in degrees
     *
     * @var float
     */
    private $latitude;

    /**
     * Longitude of the location in degrees
     *
     * @var float
     */
    private $longitude;

    /**
     * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     *
     * @var int|null
     */
    private $livePeriod;

    /**
     * Latitude of the location in degrees
     *
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Latitude of the location in degrees
     *
     * @param float $latitude
     *
     * @return void
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * Longitude of the location in degrees
     *
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Longitude of the location in degrees
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
     * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     *
     * @return int|null
     */
    public function getLivePeriod(): ?int
    {
        return $this->livePeriod;
    }

    /**
     * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     *
     * @param int|null $livePeriod
     *
     * @return void
     */
    public function setLivePeriod(?int $livePeriod): void
    {
        $this->livePeriod = $livePeriod;
    }
}
