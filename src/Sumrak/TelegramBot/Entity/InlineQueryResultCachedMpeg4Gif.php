<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineQueryResultCachedMpeg4Gif
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound) stored on the Telegram servers. By
 * default, this animated MPEG-4 file will be sent by the user with an optional caption. Alternatively, you can use
 * input_message_content to send a message with the specified content instead of the animation.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InlineQueryResultCachedMpeg4Gif implements InlineQueryResultInterface
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
     * A valid file identifier for the MP4 file
     *
     * @var string
     */
    private $mpeg4FileId;

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
     * A valid file identifier for the MP4 file
     *
     * @return string
     */
    public function getMpeg4FileId(): string
    {
        return $this->mpeg4FileId;
    }

    /**
     * A valid file identifier for the MP4 file
     *
     * @param string $mpeg4FileId
     *
     * @return void
     */
    public function setMpeg4FileId(string $mpeg4FileId): void
    {
        $this->mpeg4FileId = $mpeg4FileId;
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
