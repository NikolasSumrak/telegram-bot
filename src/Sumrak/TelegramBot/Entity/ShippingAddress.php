<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class ShippingAddress
 * This object represents a shipping address.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class ShippingAddress implements EntityInterface
{
    /**
     * ISO 3166-1 alpha-2 country code
     *
     * @var string
     */
    private $countryCode;

    /**
     * State, if applicable
     *
     * @var string
     */
    private $state;

    /**
     * City
     *
     * @var string
     */
    private $city;

    /**
     * First line for the address
     *
     * @var string
     */
    private $streetLine1;

    /**
     * Second line for the address
     *
     * @var string
     */
    private $streetLine2;

    /**
     * Address post code
     *
     * @var string
     */
    private $postCode;

    /**
     * ISO 3166-1 alpha-2 country code
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * ISO 3166-1 alpha-2 country code
     *
     * @param string $countryCode
     *
     * @return void
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * State, if applicable
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * State, if applicable
     *
     * @param string $state
     *
     * @return void
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * City
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * City
     *
     * @param string $city
     *
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * First line for the address
     *
     * @return string
     */
    public function getStreetLine1(): string
    {
        return $this->streetLine1;
    }

    /**
     * First line for the address
     *
     * @param string $streetLine1
     *
     * @return void
     */
    public function setStreetLine1(string $streetLine1): void
    {
        $this->streetLine1 = $streetLine1;
    }

    /**
     * Second line for the address
     *
     * @return string
     */
    public function getStreetLine2(): string
    {
        return $this->streetLine2;
    }

    /**
     * Second line for the address
     *
     * @param string $streetLine2
     *
     * @return void
     */
    public function setStreetLine2(string $streetLine2): void
    {
        $this->streetLine2 = $streetLine2;
    }

    /**
     * Address post code
     *
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * Address post code
     *
     * @param string $postCode
     *
     * @return void
     */
    public function setPostCode(string $postCode): void
    {
        $this->postCode = $postCode;
    }
}
