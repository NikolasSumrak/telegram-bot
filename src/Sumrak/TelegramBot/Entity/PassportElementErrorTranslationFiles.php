<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class PassportElementErrorTranslationFiles
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the
 * document translation change.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class PassportElementErrorTranslationFiles implements PassportElementErrorInterface
{
    /**
     * Error source, must be translation_files
     *
     * @var string
     */
    private $source;

    /**
     * Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”,
     * “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”,
     * “passport_registration”, “temporary_registration”
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
     * Error source, must be translation_files
     *
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Error source, must be translation_files
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
     * Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”,
     * “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”,
     * “passport_registration”, “temporary_registration”
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”,
     * “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”,
     * “passport_registration”, “temporary_registration”
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
