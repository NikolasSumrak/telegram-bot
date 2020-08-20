<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class Voice
 * This object represents a voice note.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class Voice implements EntityInterface
{
    /**
     * Identifier for this file, which can be used to download or reuse the file
     *
     * @var string
     */
    private $fileId;

    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used
     * to download or reuse the file.
     *
     * @var string
     */
    private $fileUniqueId;

    /**
     * Duration of the audio in seconds as defined by sender
     *
     * @var int
     */
    private $duration;

    /**
     * Optional. MIME type of the file as defined by sender
     *
     * @var string|null
     */
    private $mimeType;

    /**
     * Optional. File size
     *
     * @var int|null
     */
    private $fileSize;

    /**
     * Identifier for this file, which can be used to download or reuse the file
     *
     * @return string
     */
    public function getFileId(): string
    {
        return $this->fileId;
    }

    /**
     * Identifier for this file, which can be used to download or reuse the file
     *
     * @param string $fileId
     *
     * @return void
     */
    public function setFileId(string $fileId): void
    {
        $this->fileId = $fileId;
    }

    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used
     * to download or reuse the file.
     *
     * @return string
     */
    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used
     * to download or reuse the file.
     *
     * @param string $fileUniqueId
     *
     * @return void
     */
    public function setFileUniqueId(string $fileUniqueId): void
    {
        $this->fileUniqueId = $fileUniqueId;
    }

    /**
     * Duration of the audio in seconds as defined by sender
     *
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Duration of the audio in seconds as defined by sender
     *
     * @param int $duration
     *
     * @return void
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * Optional. MIME type of the file as defined by sender
     *
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * Optional. MIME type of the file as defined by sender
     *
     * @param string|null $mimeType
     *
     * @return void
     */
    public function setMimeType(?string $mimeType): void
    {
        $this->mimeType = $mimeType;
    }

    /**
     * Optional. File size
     *
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    /**
     * Optional. File size
     *
     * @param int|null $fileSize
     *
     * @return void
     */
    public function setFileSize(?int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }
}
