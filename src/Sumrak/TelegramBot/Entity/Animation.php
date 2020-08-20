<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class Animation
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 * @codeCoverageIgnore
 * @codeCoverageIgnore
 */
class Animation implements EntityInterface
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
     * Video width as defined by sender
     *
     * @var int
     */
    private $width;

    /**
     * Video height as defined by sender
     *
     * @var int
     */
    private $height;

    /**
     * Duration of the video in seconds as defined by sender
     *
     * @var int
     */
    private $duration;

    /**
     * Optional. Animation thumbnail as defined by sender
     *
     * @var PhotoSize|null
     */
    private $thumb;

    /**
     * Optional. Original animation filename as defined by sender
     *
     * @var string|null
     */
    private $fileName;

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
     * Video width as defined by sender
     *
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Video width as defined by sender
     *
     * @param int $width
     *
     * @return void
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * Video height as defined by sender
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Video height as defined by sender
     *
     * @param int $height
     *
     * @return void
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
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
     * Optional. Animation thumbnail as defined by sender
     *
     * @return PhotoSize|null
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    /**
     * Optional. Animation thumbnail as defined by sender
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
     * Optional. Original animation filename as defined by sender
     *
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * Optional. Original animation filename as defined by sender
     *
     * @param string|null $fileName
     *
     * @return void
     */
    public function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
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
