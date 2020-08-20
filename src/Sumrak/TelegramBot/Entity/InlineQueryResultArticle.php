<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineQueryResultArticle
 * Represents a link to an article or web page.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class InlineQueryResultArticle implements InlineQueryResultInterface
{
    /**
     * Type of the result, must be article
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
     * Title of the result
     *
     * @var string
     */
    private $title;

    /**
     * Content of the message to be sent
     *
     * @var InputMessageContentInterface
     */
    private $inputMessageContent;

    /**
     * Optional. Inline keyboard attached to the message
     *
     * @var InlineKeyboardMarkup|null
     */
    private $replyMarkup;

    /**
     * Optional. URL of the result
     *
     * @var string|null
     */
    private $url;

    /**
     * Optional. Pass True, if you don't want the URL to be shown in the message
     *
     * @var bool|null
     */
    private $hideUrl;

    /**
     * Optional. Short description of the result
     *
     * @var string|null
     */
    private $description;

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
     * Type of the result, must be article
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the result, must be article
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
     * Title of the result
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title of the result
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
     * Content of the message to be sent
     *
     * @return InputMessageContentInterface
     */
    public function getInputMessageContent(): InputMessageContentInterface
    {
        return $this->inputMessageContent;
    }

    /**
     * Content of the message to be sent
     *
     * @param InputMessageContentInterface $inputMessageContent
     *
     * @return void
     */
    public function setInputMessageContent(InputMessageContentInterface $inputMessageContent): void
    {
        $this->inputMessageContent = $inputMessageContent;
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
     * Optional. URL of the result
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Optional. URL of the result
     *
     * @param string|null $url
     *
     * @return void
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Optional. Pass True, if you don't want the URL to be shown in the message
     *
     * @return bool|null
     */
    public function getHideUrl(): ?bool
    {
        return $this->hideUrl;
    }

    /**
     * Optional. Pass True, if you don't want the URL to be shown in the message
     *
     * @param bool|null $hideUrl
     *
     * @return void
     */
    public function setHideUrl(?bool $hideUrl): void
    {
        $this->hideUrl = $hideUrl;
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
