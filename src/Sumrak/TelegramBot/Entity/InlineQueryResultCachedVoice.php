<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineQueryResultCachedVoice
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class InlineQueryResultCachedVoice implements InlineQueryResultInterface
{
    /**
     * Type of the result, must be voice
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
     * A valid file identifier for the voice message
     *
     * @var string
     */
    private $voiceFileId;

    /**
     * Voice message title
     *
     * @var string
     */
    private $title;

    /**
     * Optional. Caption, 0-1024 characters after entities parsing
     *
     * @var string|null
     */
    private $caption;

    /**
     * Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the voice message
     *
     * @var InputMessageContentInterface|null
     */
    private $inputMessageContent;

    /**
     * Type of the result, must be voice
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the result, must be voice
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
     * A valid file identifier for the voice message
     *
     * @return string
     */
    public function getVoiceFileId(): string
    {
        return $this->voiceFileId;
    }

    /**
     * A valid file identifier for the voice message
     *
     * @param string $voiceFileId
     *
     * @return void
     */
    public function setVoiceFileId(string $voiceFileId): void
    {
        $this->voiceFileId = $voiceFileId;
    }

    /**
     * Voice message title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Voice message title
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
     * Optional. Caption, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Caption, 0-1024 characters after entities parsing
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
     * Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     *
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the voice message
     *
     * @return InputMessageContentInterface|null
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->inputMessageContent;
    }

    /**
     * Optional. Content of the message to be sent instead of the voice message
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
