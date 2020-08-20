<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineQueryResultCachedVideo
 * Represents a link to a video file stored on the Telegram servers. By default, this video file will be sent by the
 * user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified
 * content instead of the video.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InlineQueryResultCachedVideo implements InlineQueryResultInterface
{
    /**
     * Type of the result, must be video
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
     * A valid file identifier for the video file
     *
     * @var string
     */
    private $videoFileId;

    /**
     * Title for the result
     *
     * @var string
     */
    private $title;

    /**
     * Optional. Short description of the result
     *
     * @var string|null
     */
    private $description;

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     *
     * @var string|null
     */
    private $caption;

    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the video
     *
     * @var InputMessageContentInterface|null
     */
    private $inputMessageContent;

    /**
     * Type of the result, must be video
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the result, must be video
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
     * A valid file identifier for the video file
     *
     * @return string
     */
    public function getVideoFileId(): string
    {
        return $this->videoFileId;
    }

    /**
     * A valid file identifier for the video file
     *
     * @param string $videoFileId
     *
     * @return void
     */
    public function setVideoFileId(string $videoFileId): void
    {
        $this->videoFileId = $videoFileId;
    }

    /**
     * Title for the result
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title for the result
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
     * Optional. Short description of the result
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Optional. Short description of the result
     *
     * @param string|null $description
     *
     * @return void
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
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
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     *
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the video
     *
     * @return InputMessageContentInterface|null
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->inputMessageContent;
    }

    /**
     * Optional. Content of the message to be sent instead of the video
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
