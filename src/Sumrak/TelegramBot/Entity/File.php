<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class File
 * This object represents a file ready to be downloaded. The file can be downloaded via the link
 * https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1
 * hour. When the link expires, a new one can be requested by calling getFile.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class File implements EntityInterface
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
     * Optional. File size, if known
     *
     * @var int|null
     */
    private $fileSize;

    /**
     * Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     *
     * @var string|null
     */
    private $filePath;

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
     * Optional. File size, if known
     *
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    /**
     * Optional. File size, if known
     *
     * @param int|null $fileSize
     *
     * @return void
     */
    public function setFileSize(?int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    /**
     * Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     *
     * @return string|null
     */
    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    /**
     * Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     *
     * @param string|null $filePath
     *
     * @return void
     */
    public function setFilePath(?string $filePath): void
    {
        $this->filePath = $filePath;
    }
}
