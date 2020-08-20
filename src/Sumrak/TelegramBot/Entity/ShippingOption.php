<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class ShippingOption
 * This object represents one shipping option.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class ShippingOption implements EntityInterface
{
    /**
     * Shipping option identifier
     *
     * @var string
     */
    private $id;

    /**
     * Option title
     *
     * @var string
     */
    private $title;

    /**
     * List of price portions
     *
     * @var LabeledPrice[]
     */
    private $prices;

    /**
     * Shipping option identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Shipping option identifier
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
     * Option title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Option title
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
     * List of price portions
     *
     * @return LabeledPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * List of price portions
     *
     * @param LabeledPrice[] $prices
     *
     * @return void
     */
    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }
}
