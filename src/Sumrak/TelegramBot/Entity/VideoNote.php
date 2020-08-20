<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class VideoNote
 * This object represents a video message (available in Telegram apps as of v.4.0).
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class VideoNote implements EntityInterface
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
     * Video width and height (diameter of the video message) as defined by sender
     *
     * @var int
     */
    private $length;

    /**
     * Duration of the video in seconds as defined by sender
     *
     * @var int
     */
    private $duration;

    /**
     * Optional. Video thumbnail
     *
     * @var PhotoSize|null
     */
    private $thumb;

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
     * Video width and height (diameter of the video message) as defined by sender
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Video width and height (diameter of the video message) as defined by sender
     *
     * @param int $length
     *
     * @return void
     */
    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * Duration of the video in seconds as defined by sender
     *
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Duration of the video in seconds as defined by sender
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
     * Optional. Video thumbnail
     *
     * @return PhotoSize|null
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    /**
     * Optional. Video thumbnail
     *
     * @param PhotoSize|null $thumb
     *
     * @return void
     */
    public function setThumb(?PhotoSize $thumb): void
    {
        $this->thumb = $thumb;
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
