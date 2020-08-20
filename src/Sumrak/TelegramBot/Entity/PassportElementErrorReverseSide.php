<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class PassportElementErrorReverseSide
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse
 * side of the document changes.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class PassportElementErrorReverseSide implements PassportElementErrorInterface
{
    /**
     * Error source, must be reverse_side
     *
     * @var string
     */
    private $source;

    /**
     * The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
     *
     * @var string
     */
    private $type;

    /**
     * Base64-encoded hash of the file with the reverse side of the document
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
     * Error source, must be reverse_side
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Error source, must be reverse_side
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
     * The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
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
     * Base64-encoded hash of the file with the reverse side of the document
     *
     * @return string
     */
    public function getFileHash(): string
    {
        return $this->fileHash;
    }

    /**
     * Base64-encoded hash of the file with the reverse side of the document
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
