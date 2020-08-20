<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class UserProfilePhotos
 * This object represent a user's profile pictures.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class UserProfilePhotos implements EntityInterface
{
    /**
     * Total number of profile pictures the target user has
     *
     * @var int
     */
    private $totalCount;

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @var PhotoSize[][]
     */
    private $photos;

    /**
     * Total number of profile pictures the target user has
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * Total number of profile pictures the target user has
     *
     * @param int $totalCount
     *
     * @return void
     */
    public function setTotalCount(int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @return PhotoSize[][]
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @param PhotoSize[][] $photos
     *
     * @return void
     */
    public function setPhotos(array $photos): void
    {
        $this->photos = $photos;
    }
}
