<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class ShippingQuery
 * This object contains information about an incoming shipping query.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class ShippingQuery implements EntityInterface
{
    /**
     * Unique query identifier
     *
     * @var string
     */
    private $id;

    /**
     * User who sent the query
     *
     * @var User
     */
    private $from;

    /**
     * Bot specified invoice payload
     *
     * @var string
     */
    private $invoicePayload;

    /**
     * User specified shipping address
     *
     * @var ShippingAddress
     */
    private $shippingAddress;

    /**
     * Unique query identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique query identifier
     *
     * @param string $id
     *
     * @return void
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * User who sent the query
     *
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * User who sent the query
     *
     * @param User $from
     *
     * @return void
     */
    public function setFrom(User $from): void
    {
        $this->from = $from;
    }

    /**
     * Bot specified invoice payload
     *
     * @return string
     */
    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    /**
     * Bot specified invoice payload
     *
     * @param string $invoicePayload
     *
     * @return void
     */
    public function setInvoicePayload(string $invoicePayload): void
    {
        $this->invoicePayload = $invoicePayload;
    }

    /**
     * User specified shipping address
     *
     * @return ShippingAddress
     */
    public function getShippingAddress(): ShippingAddress
    {
        return $this->shippingAddress;
    }

    /**
     * User specified shipping address
     *
     * @param ShippingAddress $shippingAddress
     *
     * @return void
     */
    public function setShippingAddress(ShippingAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }
}
