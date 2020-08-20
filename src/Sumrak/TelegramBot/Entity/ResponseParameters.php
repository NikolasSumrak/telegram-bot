<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class ResponseParameters
 * Contains information about why a request was unsuccessful.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class ResponseParameters implements EntityInterface
{
    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @var int|null
     */
    private $migrateToChatId;

    /**
     * Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be
     * repeated
     *
     * @var int|null
     */
    private $retryAfter;

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @return int|null
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @param int|null $migrateToChatId
     *
     * @return void
     */
    public function setMigrateToChatId(?int $migrateToChatId): void
    {
        $this->migrateToChatId = $migrateToChatId;
    }

    /**
     * Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be
     * repeated
     *
     * @return int|null
     */
    public function getRetryAfter(): ?int
    {
        return $this->retryAfter;
    }

    /**
     * Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be
     * repeated
     *
     * @param int|null $retryAfter
     *
     * @return void
     */
    public function setRetryAfter(?int $retryAfter): void
    {
        $this->retryAfter = $retryAfter;
    }
}
