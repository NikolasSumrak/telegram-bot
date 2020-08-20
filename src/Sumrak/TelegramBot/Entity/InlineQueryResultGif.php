<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineQueryResultGif
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional
 * caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the
 * animation.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InlineQueryResultGif implements InlineQueryResultInterface
{
    /**
     * Type of the result, must be gif
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
     * A valid URL for the GIF file. File size must not exceed 1MB
     *
     * @var string
     */
    private $gifUrl;

    /**
     * Optional. Width of the GIF
     *
     * @var int|null
     */
    private $gifWidth;

    /**
     * Optional. Height of the GIF
     *
     * @var int|null
     */
    private $gifHeight;

    /**
     * Optional. Duration of the GIF
     *
     * @var int|null
     */
    private $gifDuration;

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
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
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
     * Optional. Content of the message to be sent instead of the GIF animation
     *
     * @var InputMessageContentInterface|null
     */
    private $inputMessageContent;

    /**
     * Type of the result, must be gif
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the result, must be gif
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
     * A valid URL for the GIF file. File size must not exceed 1MB
     *
     * @return string
     */
    public function getGifUrl(): string
    {
        return $this->gifUrl;
    }

    /**
     * A valid URL for the GIF file. File size must not exceed 1MB
     *
     * @param string $gifUrl
     *
     * @return void
     */
    public function setGifUrl(string $gifUrl): void
    {
        $this->gifUrl = $gifUrl;
    }

    /**
     * Optional. Width of the GIF
     *
     * @return int|null
     */
    public function getGifWidth(): ?int
    {
        return $this->gifWidth;
    }

    /**
     * Optional. Width of the GIF
     *
     * @param int|null $gifWidth
     *
     * @return void
     */
    public function setGifWidth(?int $gifWidth): void
    {
        $this->gifWidth = $gifWidth;
    }

    /**
     * Optional. Height of the GIF
     *
     * @return int|null
     */
    public function getGifHeight(): ?int
    {
        return $this->gifHeight;
    }

    /**
     * Optional. Height of the GIF
     *
     * @param int|null $gifHeight
     *
     * @return void
     */
    public function setGifHeight(?int $gifHeight): void
    {
        $this->gifHeight = $gifHeight;
    }

    /**
     * Optional. Duration of the GIF
     *
     * @return int|null
     */
    public function getGifDuration(): ?int
    {
        return $this->gifDuration;
    }

    /**
     * Optional. Duration of the GIF
     *
     * @param int|null $gifDuration
     *
     * @return void
     */
    public function setGifDuration(?int $gifDuration): void
    {
        $this->gifDuration = $gifDuration;
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
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
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
     * Optional. Content of the message to be sent instead of the GIF animation
     *
     * @return InputMessageContentInterface|null
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->inputMessageContent;
    }

    /**
     * Optional. Content of the message to be sent instead of the GIF animation
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
