<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class LabeledPrice
 * This object represents a portion of the price for goods or services.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class LabeledPrice implements EntityInterface
{
    /**
     * Portion label
     *
     * @var string
     */
    private $label;

    /**
     * Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price
     * of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the
     * decimal point for each currency (2 for the majority of currencies).
     *
     * @var int
     */
    private $amount;

    /**
     * Portion label
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Portion label
     *
     * @param string $label
     *
     * @return void
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price
     * of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the
     * decimal point for each currency (2 for the majority of currencies).
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price
     * of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the
     * decimal point for each currency (2 for the majority of currencies).
     *
     * @param int $amount
     *
     * @return void
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }
}
