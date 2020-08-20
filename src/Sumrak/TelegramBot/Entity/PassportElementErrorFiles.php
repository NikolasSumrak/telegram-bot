<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class PassportElementErrorFiles
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the
 * scans changes.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class PassportElementErrorFiles implements PassportElementErrorInterface
{
    /**
     * Error source, must be files
     *
     * @var string
     */
    private $source;

    /**
     * The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”,
     * “rental_agreement”, “passport_registration”, “temporary_registration”
     *
     * @var string
     */
    private $type;

    /**
     * List of base64-encoded file hashes
     *
     * @var string[]
     */
    private $fileHashes;

    /**
     * Error message
     *
     * @var string
     */
    private $message;

    /**
     * Error source, must be files
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Error source, must be files
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
     * The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”,
     * “rental_agreement”, “passport_registration”, “temporary_registration”
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”,
     * “rental_agreement”, “passport_registration”, “temporary_registration”
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
     * List of base64-encoded file hashes
     *
     * @return string[]
     */
    public function getFileHashes(): array
    {
        return $this->fileHashes;
    }

    /**
     * List of base64-encoded file hashes
     *
     * @param string[] $fileHashes
     *
     * @return void
     */
    public function setFileHashes(array $fileHashes): void
    {
        $this->fileHashes = $fileHashes;
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
