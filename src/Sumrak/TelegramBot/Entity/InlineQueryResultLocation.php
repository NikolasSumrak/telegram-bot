<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineQueryResultLocation
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class InlineQueryResultLocation implements InlineQueryResultInterface
{
    /**
     * Type of the result, must be location
     *
     * @var string
     */
    private $type;

    /**
     * Unique identifier for this result, 1-64 Bytes
     *
     * @var string
     */
    private $id;

    /**
     * Location latitude in degrees
     *
     * @var float
     */
    private $latitude;

    /**
     * Location longitude in degrees
     *
     * @var float
     */
    private $longitude;

    /**
     * Location title
     *
     * @var string
     */
    private $title;

    /**
     * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     *
     * @var int|null
     */
    private $livePeriod;

    /**
     * Optional. Inline keyboard attached to the message
     *
     * @var InlineKeyboardMarkup|null
     */
    private $replyMarkup;

    /**
     * Optional. Content of the message to be sent instead of the location
     *
     * @var InputMessageContentInterface|null
     */
    private $inputMessageContent;

    /**
     * Optional. Url of the thumbnail for the result
     *
     * @var string|null
     */
    private $thumbUrl;

    /**
     * Optional. Thumbnail width
     *
     * @var int|null
     */
    private $thumbWidth;

    /**
     * Optional. Thumbnail height
     *
     * @var int|null
     */
    private $thumbHeight;

    /**
     * Type of the result, must be location
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the result, must be location
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
     * Unique identifier for this result, 1-64 Bytes
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier for this result, 1-64 Bytes
     *
     * @param string $id
     *
     * @return void
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Location latitude in degrees
     *
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Location latitude in degrees
     *
     * @param float $latitude
     *
     * @return void
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * Location longitude in degrees
     *
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Location longitude in degrees
     *
     * @param float $longitude
     *
     * @return void
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * Location title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Location title
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     *
     * @return int|null
     */
    public function getLivePeriod(): ?int
    {
        return $this->livePeriod;
    }

    /**
     * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     *
     * @param int|null $livePeriod
     *
     * @return void
     */
    public function setLivePeriod(?int $livePeriod): void
    {
        $this->livePeriod = $livePeriod;
    }

    /**
     * Optional. Inline keyboard attached to the message
     *
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    /**
     * Optional. Inline keyboard attached to the message
     *
     * @param InlineKeyboardMarkup|null $replyMarkup
     *
     * @return void
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }

    /**
     * Optional. Content of the message to be sent instead of the location
     *
     * @return InputMessageContentInterface|null
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->inputMessageContent;
    }

    /**
     * Optional. Content of the message to be sent instead of the location
     *
     * @param InputMessageContentInterface|null $inputMessageContent
     *
     * @return void
     */
    public function setInputMessageContent(?InputMessageContentInterface $inputMessageContent): void
    {
        $this->inputMessageContent = $inputMessageContent;
    }

    /**
     * Optional. Url of the thumbnail for the result
     *
     * @return string|null
     */
    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    /**
     * Optional. Url of the thumbnail for the result
     *
     * @param string|null $thumbUrl
     *
     * @return void
     */
    public function setThumbUrl(?string $thumbUrl): void
    {
        $this->thumbUrl = $thumbUrl;
    }

    /**
     * Optional. Thumbnail width
     *
     * @return int|null
     */
    public function getThumbWidth(): ?int
    {
        return $this->thumbWidth;
    }

    /**
     * Optional. Thumbnail width
     *
     * @param int|null $thumbWidth
     *
     * @return void
     */
    public function setThumbWidth(?int $thumbWidth): void
    {
        $this->thumbWidth = $thumbWidth;
    }

    /**
     * Optional. Thumbnail height
     *
     * @return int|null
     */
    public function getThumbHeight(): ?int
    {
        return $this->thumbHeight;
    }

    /**
     * Optional. Thumbnail height
     *
     * @param int|null $thumbHeight
     *
     * @return void
     */
    public function setThumbHeight(?int $thumbHeight): void
    {
        $this->thumbHeight = $thumbHeight;
    }
}
