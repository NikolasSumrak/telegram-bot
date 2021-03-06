<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class PassportElementErrorFrontSide
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front
 * side of the document changes.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class PassportElementErrorFrontSide implements PassportElementErrorInterface
{
    /**
     * Error source, must be front_side
     *
     * @var string
     */
    private $source;

    /**
     * The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”,
     * “identity_card”, “internal_passport”
     *
     * @var string
     */
    private $type;

    /**
     * Base64-encoded hash of the file with the front side of the document
     *
     * @var string
     */
    private $fileHash;

    /**
     * Error message
     *
     * @var string
     */
    private $message;

    /**
     * Error source, must be front_side
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Error source, must be front_side
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
     * The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”,
     * “identity_card”, “internal_passport”
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”,
     * “identity_card”, “internal_passport”
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
     * Base64-encoded hash of the file with the front side of the document
     *
     * @return string
     */
    public function getFileHash(): string
    {
        return $this->fileHash;
    }

    /**
     * Base64-encoded hash of the file with the front side of the document
     *
     * @param string $fileHash
     *
     * @return void
     */
    public function setFileHash(string $fileHash): void
    {
        $this->fileHash = $fileHash;
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
