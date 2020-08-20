<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineQueryResultDocument
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will ignore them.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InlineQueryResultDocument implements InlineQueryResultInterface
{
    /**
     * Type of the result, must be document
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
     * Title for the result
     *
     * @var string
     */
    private $title;

    /**
     * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     *
     * @var string|null
     */
    private $caption;

    /**
     * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     *
     * @var string|null
     */
    private $parseMode;

    /**
     * A valid URL for the file
     *
     * @var string
     */
    private $documentUrl;

    /**
     * Mime type of the content of the file, either “application/pdf” or “application/zip”
     *
     * @var string
     */
    private $mimeType;

    /**
     * Optional. Short description of the result
     *
     * @var string|null
     */
    private $description;

    /**
     * Optional. Inline keyboard attached to the message
     *
     * @var InlineKeyboardMarkup|null
     */
    private $replyMarkup;

    /**
     * Optional. Content of the message to be sent instead of the file
     *
     * @var InputMessageContentInterface|null
     */
    private $inputMessageContent;

    /**
     * Optional. URL of the thumbnail (jpeg only) for the file
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
     * Type of the result, must be document
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the result, must be document
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
     * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
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
     * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     *
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
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
     * A valid URL for the file
     *
     * @return string
     */
    public function getDocumentUrl(): string
    {
        return $this->documentUrl;
    }

    /**
     * A valid URL for the file
     *
     * @param string $documentUrl
     *
     * @return void
     */
    public function setDocumentUrl(string $documentUrl): void
    {
        $this->documentUrl = $documentUrl;
    }

    /**
     * Mime type of the content of the file, either “application/pdf” or “application/zip”
     *
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Mime type of the content of the file, either “application/pdf” or “application/zip”
     *
     * @param string $mimeType
     *
     * @return void
     */
    public function setMimeType(string $mimeType): void
    {
        $this->mimeType = $mimeType;
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
     * Optional. Content of the message to be sent instead of the file
     *
     * @return InputMessageContentInterface|null
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->inputMessageContent;
    }

    /**
     * Optional. Content of the message to be sent instead of the file
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
     * Optional. URL of the thumbnail (jpeg only) for the file
     *
     * @return string|null
     */
    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    /**
     * Optional. URL of the thumbnail (jpeg only) for the file
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
