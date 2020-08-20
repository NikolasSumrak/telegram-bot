<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineQueryResultMpeg4Gif
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file
 * will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message
 * with the specified content instead of the animation.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InlineQueryResultMpeg4Gif implements InlineQueryResultInterface
{
    /**
     * Type of the result, must be mpeg4_gif
     *
     * @var string
     */
    private $type;

    /**
     * Unique identifier for this result, 1-64 bytes
     *
     * @var string
     */
    private $id;

    /**
     * A valid URL for the MP4 file. File size must not exceed 1MB
     *
     * @var string
     */
    private $mpeg4Url;

    /**
     * Optional. Video width
     *
     * @var int|null
     */
    private $mpeg4Width;

    /**
     * Optional. Video height
     *
     * @var int|null
     */
    private $mpeg4Height;

    /**
     * Optional. Video duration
     *
     * @var int|null
     */
    private $mpeg4Duration;

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     *
     * @var string
     */
    private $thumbUrl;

    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”.
     * Defaults to “image/jpeg”
     *
     * @var string|null
     */
    private $thumbMimeType;

    /**
     * Optional. Title for the result
     *
     * @var string|null
     */
    private $title;

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     *
     * @var string|null
     */
    private $caption;

    /**
     * Optional. Mode for parsing entities in the caption. See formatting options for more details.
     *
     * @var string|null
     */
    private $parseMode;

    /**
     * Optional. Inline keyboard attached to the message
     *
     * @var InlineKeyboardMarkup|null
     */
    private $replyMarkup;

    /**
     * Optional. Content of the message to be sent instead of the video animation
     *
     * @var InputMessageContentInterface|null
     */
    private $inputMessageContent;

    /**
     * Type of the result, must be mpeg4_gif
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the result, must be mpeg4_gif
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
     * Unique identifier for this result, 1-64 bytes
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier for this result, 1-64 bytes
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
     * A valid URL for the MP4 file. File size must not exceed 1MB
     *
     * @return string
     */
    public function getMpeg4Url(): string
    {
        return $this->mpeg4Url;
    }

    /**
     * A valid URL for the MP4 file. File size must not exceed 1MB
     *
     * @param string $mpeg4Url
     *
     * @return void
     */
    public function setMpeg4Url(string $mpeg4Url): void
    {
        $this->mpeg4Url = $mpeg4Url;
    }

    /**
     * Optional. Video width
     *
     * @return int|null
     */
    public function getMpeg4Width(): ?int
    {
        return $this->mpeg4Width;
    }

    /**
     * Optional. Video width
     *
     * @param int|null $mpeg4Width
     *
     * @return void
     */
    public function setMpeg4Width(?int $mpeg4Width): void
    {
        $this->mpeg4Width = $mpeg4Width;
    }

    /**
     * Optional. Video height
     *
     * @return int|null
     */
    public function getMpeg4Height(): ?int
    {
        return $this->mpeg4Height;
    }

    /**
     * Optional. Video height
     *
     * @param int|null $mpeg4Height
     *
     * @return void
     */
    public function setMpeg4Height(?int $mpeg4Height): void
    {
        $this->mpeg4Height = $mpeg4Height;
    }

    /**
     * Optional. Video duration
     *
     * @return int|null
     */
    public function getMpeg4Duration(): ?int
    {
        return $this->mpeg4Duration;
    }

    /**
     * Optional. Video duration
     *
     * @param int|null $mpeg4Duration
     *
     * @return void
     */
    public function setMpeg4Duration(?int $mpeg4Duration): void
    {
        $this->mpeg4Duration = $mpeg4Duration;
    }

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     *
     * @return string
     */
    public function getThumbUrl(): string
    {
        return $this->thumbUrl;
    }

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
     *
     * @param string $thumbUrl
     *
     * @return void
     */
    public function setThumbUrl(string $thumbUrl): void
    {
        $this->thumbUrl = $thumbUrl;
    }

    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”.
     * Defaults to “image/jpeg”
     *
     * @return string|null
     */
    public function getThumbMimeType(): ?string
    {
        return $this->thumbMimeType;
    }

    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”.
     * Defaults to “image/jpeg”
     *
     * @param string|null $thumbMimeType
     *
     * @return void
     */
    public function setThumbMimeType(?string $thumbMimeType): void
    {
        $this->thumbMimeType = $thumbMimeType;
    }

    /**
     * Optional. Title for the result
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Optional. Title for the result
     *
     * @param string|null $title
     *
     * @return void
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
     *
     * @param string|null $caption
     *
     * @return void
     */
    public function setCaption(?string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * Optional. Mode for parsing entities in the caption. See formatting options for more details.
     *
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * Optional. Mode for parsing entities in the caption. See formatting options for more details.
     *
     * @param string|null $parseMode
     *
     * @return void
     */
    public function setParseMode(?string $parseMode): void
    {
        $this->parseMode = $parseMode;
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
     * Optional. Content of the message to be sent instead of the video animation
     *
     * @return InputMessageContentInterface|null
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->inputMessageContent;
    }

    /**
     * Optional. Content of the message to be sent instead of the video animation
     *
     * @param InputMessageContentInterface|null $inputMessageContent
     *
     * @return void
     */
    public function setInputMessageContent(?InputMessageContentInterface $inputMessageContent): void
    {
        $this->inputMessageContent = $inputMessageContent;
    }
}
