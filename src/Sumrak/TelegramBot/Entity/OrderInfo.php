<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class OrderInfo
 * This object represents information about an order.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class OrderInfo implements EntityInterface
{
    /**
     * Optional. User name
     *
     * @var string|null
     */
    private $name;

    /**
     * Optional. User's phone number
     *
     * @var string|null
     */
    private $phoneNumber;

    /**
     * Optional. User email
     *
     * @var string|null
     */
    private $email;

    /**
     * Optional. User shipping address
     *
     * @var ShippingAddress|null
     */
    private $shippingAddress;

    /**
     * Optional. User name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Optional. User name
     *
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Optional. User's phone number
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Optional. User's phone number
     *
     * @param string|null $phoneNumber
     *
     * @return void
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Optional. User email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Optional. User email
     *
     * @param string|null $email
     *
     * @return void
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Optional. User shipping address
     *
     * @return ShippingAddress|null
     */
    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Optional. User shipping address
     *
     * @param ShippingAddress|null $shippingAddress
     *
     * @return void
     */
    public function setShippingAddress(?ShippingAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }
}
