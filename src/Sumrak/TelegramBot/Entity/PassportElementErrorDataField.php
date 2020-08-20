<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class PassportElementErrorDataField
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when
 * the field's value changes.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class PassportElementErrorDataField implements PassportElementErrorInterface
{
    /**
     * Error source, must be data
     *
     * @var string
     */
    private $source;

    /**
     * The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”,
     * “driver_license”, “identity_card”, “internal_passport”, “address”
     *
     * @var string
     */
    private $type;

    /**
     * Name of the data field which has the error
     *
     * @var string
     */
    private $fieldName;

    /**
     * Base64-encoded data hash
     *
     * @var string
     */
    private $dataHash;

    /**
     * Error message
     *
     * @var string
     */
    private $message;

    /**
     * Error source, must be data
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Error source, must be data
     *
     * @param string $source
     *
     * @return void
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”,
     * “driver_license”, “identity_card”, “internal_passport”, “address”
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”,
     * “driver_license”, “identity_card”, “internal_passport”, “address”
     *
     * @param string $type
     *
     * @return void
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Name of the data field which has the error
     *
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    /**
     * Name of the data field which has the error
     *
     * @param string $fieldName
     *
     * @return void
     */
    public function setFieldName(string $fieldName): void
    {
        $this->fieldName = $fieldName;
    }

    /**
     * Base64-encoded data hash
     *
     * @return string
     */
    public function getDataHash(): string
    {
        return $this->dataHash;
    }

    /**
     * Base64-encoded data hash
     *
     * @param string $dataHash
     *
     * @return void
     */
    public function setDataHash(string $dataHash): void
    {
        $this->dataHash = $dataHash;
    }

    /**
     * Error message
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Error message
     *
     * @param string $message
     *
     * @return void
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}
