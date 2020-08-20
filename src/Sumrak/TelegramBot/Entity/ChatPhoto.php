<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class ChatPhoto
 * This object represents a chat photo.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class ChatPhoto implements EntityInterface
{
    /**
     * File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as
     * long as the photo is not changed.
     *
     * @var string
     */
    private $smallFileId;

    /**
     * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for
     * different bots. Can't be used to download or reuse the file.
     *
     * @var string
     */
    private $smallFileUniqueId;

    /**
     * File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as
     * long as the photo is not changed.
     *
     * @var string
     */
    private $bigFileId;

    /**
     * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different
     * bots. Can't be used to download or reuse the file.
     *
     * @var string
     */
    private $bigFileUniqueId;

    /**
     * File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as
     * long as the photo is not changed.
     *
     * @return string
     */
    public function getSmallFileId(): string
    {
        return $this->smallFileId;
    }

    /**
     * File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as
     * long as the photo is not changed.
     *
     * @param string $smallFileId
     *
     * @return void
     */
    public function setSmallFileId(string $smallFileId): void
    {
        $this->smallFileId = $smallFileId;
    }

    /**
     * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for
     * different bots. Can't be used to download or reuse the file.
     *
     * @return string
     */
    public function getSmallFileUniqueId(): string
    {
        return $this->smallFileUniqueId;
    }

    /**
     * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for
     * different bots. Can't be used to download or reuse the file.
     *
     * @param string $smallFileUniqueId
     *
     * @return void
     */
    public function setSmallFileUniqueId(string $smallFileUniqueId): void
    {
        $this->smallFileUniqueId = $smallFileUniqueId;
    }

    /**
     * File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as
     * long as the photo is not changed.
     *
     * @return string
     */
    public function getBigFileId(): string
    {
        return $this->bigFileId;
    }

    /**
     * File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as
     * long as the photo is not changed.
     *
     * @param string $bigFileId
     *
     * @return void
     */
    public function setBigFileId(string $bigFileId): void
    {
        $this->bigFileId = $bigFileId;
    }

    /**
     * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different
     * bots. Can't be used to download or reuse the file.
     *
     * @return string
     */
    public function getBigFileUniqueId(): string
    {
        return $this->bigFileUniqueId;
    }

    /**
     * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different
     * bots. Can't be used to download or reuse the file.
     *
     * @param string $bigFileUniqueId
     *
     * @return void
     */
    public function setBigFileUniqueId(string $bigFileUniqueId): void
    {
        $this->bigFileUniqueId = $bigFileUniqueId;
    }
}
