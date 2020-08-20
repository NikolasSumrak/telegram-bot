<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InputTextMessageContent
 * Represents the content of a text message to be sent as the result of an inline query.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InputTextMessageContent implements InputMessageContentInterface
{
    /**
     * Text of the message to be sent, 1-4096 characters
     *
     * @var string
     */
    private $messageText;

    /**
     * Optional. Mode for parsing entities in the message text. See formatting options for more details.
     *
     * @var string|null
     */
    private $parseMode;

    /**
     * Optional. Disables link previews for links in the sent message
     *
     * @var bool|null
     */
    private $disableWebPagePreview;

    /**
     * Text of the message to be sent, 1-4096 characters
     *
     * @return string
     */
    public function getMessageText(): string
    {
        return $this->messageText;
    }

    /**
     * Text of the message to be sent, 1-4096 characters
     *
     * @param string $messageText
     *
     * @return void
     */
    public function setMessageText(string $messageText): void
    {
        $this->messageText = $messageText;
    }

    /**
     * Optional. Mode for parsing entities in the message text. See formatting options for more details.
     *
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * Optional. Mode for parsing entities in the message text. See formatting options for more details.
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
     * Optional. Disables link previews for links in the sent message
     *
     * @return bool|null
     */
    public function getDisableWebPagePreview(): ?bool
    {
        return $this->disableWebPagePreview;
    }

    /**
     * Optional. Disables link previews for links in the sent message
     *
     * @param bool|null $disableWebPagePreview
     *
     * @return void
     */
    public function setDisableWebPagePreview(?bool $disableWebPagePreview): void
    {
        $this->disableWebPagePreview = $disableWebPagePreview;
    }
}
