<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class PassportElementErrorUnspecified
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class PassportElementErrorUnspecified implements PassportElementErrorInterface
{
    /**
     * Error source, must be unspecified
     *
     * @var string
     */
    private $source;

    /**
     * Type of element of the user's Telegram Passport which has the issue
     *
     * @var string
     */
    private $type;

    /**
     * Base64-encoded element hash
     *
     * @var string
     */
    private $elementHash;

    /**
     * Error message
     *
     * @var string
     */
    private $message;

    /**
     * Error source, must be unspecified
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Error source, must be unspecified
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
     * Type of element of the user's Telegram Passport which has the issue
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of element of the user's Telegram Passport which has the issue
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
     * Base64-encoded element hash
     *
     * @return string
     */
    public function getElementHash(): string
    {
        return $this->elementHash;
    }

    /**
     * Base64-encoded element hash
     *
     * @param string $elementHash
     *
     * @return void
     */
    public function setElementHash(string $elementHash): void
    {
        $this->elementHash = $elementHash;
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
