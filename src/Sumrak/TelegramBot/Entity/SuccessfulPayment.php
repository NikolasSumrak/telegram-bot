<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class SuccessfulPayment
 * This object contains basic information about a successful payment.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class SuccessfulPayment implements EntityInterface
{
    /**
     * Three-letter ISO 4217 currency code
     *
     * @var string
     */
    private $currency;

    /**
     * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$
     * 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal
     * point for each currency (2 for the majority of currencies).
     *
     * @var int
     */
    private $totalAmount;

    /**
     * Bot specified invoice payload
     *
     * @var string
     */
    private $invoicePayload;

    /**
     * Optional. Identifier of the shipping option chosen by the user
     *
     * @var string|null
     */
    private $shippingOptionId;

    /**
     * Optional. Order info provided by the user
     *
     * @var OrderInfo|null
     */
    private $orderInfo;

    /**
     * Telegram payment identifier
     *
     * @var string
     */
    private $telegramPaymentChargeId;

    /**
     * Provider payment identifier
     *
     * @var string
     */
    private $providerPaymentChargeId;

    /**
     * Three-letter ISO 4217 currency code
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Three-letter ISO 4217 currency code
     *
     * @param string $currency
     *
     * @return void
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$
     * 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal
     * point for each currency (2 for the majority of currencies).
     *
     * @return int
     */
    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    /**
     * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$
     * 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal
     * point for each currency (2 for the majority of currencies).
     *
     * @param int $totalAmount
     *
     * @return void
     */
    public function setTotalAmount(int $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
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
     * Optional. Identifier of the shipping option chosen by the user
     *
     * @return string|null
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }

    /**
     * Optional. Identifier of the shipping option chosen by the user
     *
     * @param string|null $shippingOptionId
     *
     * @return void
     */
    public function setShippingOptionId(?string $shippingOptionId): void
    {
        $this->shippingOptionId = $shippingOptionId;
    }

    /**
     * Optional. Order info provided by the user
     *
     * @return OrderInfo|null
     */
    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    /**
     * Optional. Order info provided by the user
     *
     * @param OrderInfo|null $orderInfo
     *
     * @return void
     */
    public function setOrderInfo(?OrderInfo $orderInfo): void
    {
        $this->orderInfo = $orderInfo;
    }

    /**
     * Telegram payment identifier
     *
     * @return string
     */
    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    /**
     * Telegram payment identifier
     *
     * @param string $telegramPaymentChargeId
     *
     * @return void
     */
    public function setTelegramPaymentChargeId(string $telegramPaymentChargeId): void
    {
        $this->telegramPaymentChargeId = $telegramPaymentChargeId;
    }

    /**
     * Provider payment identifier
     *
     * @return string
     */
    public function getProviderPaymentChargeId(): string
    {
        return $this->providerPaymentChargeId;
    }

    /**
     * Provider payment identifier
     *
     * @param string $providerPaymentChargeId
     *
     * @return void
     */
    public function setProviderPaymentChargeId(string $providerPaymentChargeId): void
    {
        $this->providerPaymentChargeId = $providerPaymentChargeId;
    }
}
