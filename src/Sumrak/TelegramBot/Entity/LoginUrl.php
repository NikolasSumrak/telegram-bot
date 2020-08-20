<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class LoginUrl
 * Telegram apps support these buttons as of version 5.7.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class LoginUrl implements EntityInterface
{
    /**
     * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If
     * the user refuses to provide authorization data, the original URL without information about the user will be
     * opened. The data added is the same as described in Receiving authorization data. NOTE: You must always check the
     * hash of the received data to verify the authentication and the integrity of the data as described in Checking
     * authorization.
     *
     * @var string
     */
    private $url;

    /**
     * Optional. New text of the button in forwarded messages.
     *
     * @var string|null
     */
    private $forwardText;

    /**
     * Optional. Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If
     * not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked
     * with the bot. See Linking your domain to the bot for more details.
     *
     * @var string|null
     */
    private $botUsername;

    /**
     * Optional. Pass True to request the permission for your bot to send messages to the user.
     *
     * @var bool|null
     */
    private $requestWriteAccess;

    /**
     * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If
     * the user refuses to provide authorization data, the original URL without information about the user will be
     * opened. The data added is the same as described in Receiving authorization data. NOTE: You must always check the
     * hash of the received data to verify the authentication and the integrity of the data as described in Checking
     * authorization.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If
     * the user refuses to provide authorization data, the original URL without information about the user will be
     * opened. The data added is the same as described in Receiving authorization data. NOTE: You must always check the
     * hash of the received data to verify the authentication and the integrity of the data as described in Checking
     * authorization.
     *
     * @param string $url
     *
     * @return void
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Optional. New text of the button in forwarded messages.
     *
     * @return string|null
     */
    public function getForwardText(): ?string
    {
        return $this->forwardText;
    }

    /**
     * Optional. New text of the button in forwarded messages.
     *
     * @param string|null $forwardText
     *
     * @return void
     */
    public function setForwardText(?string $forwardText): void
    {
        $this->forwardText = $forwardText;
    }

    /**
     * Optional. Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If
     * not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked
     * with the bot. See Linking your domain to the bot for more details.
     *
     * @return string|null
     */
    public function getBotUsername(): ?string
    {
        return $this->botUsername;
    }

    /**
     * Optional. Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If
     * not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked
     * with the bot. See Linking your domain to the bot for more details.
     *
     * @param string|null $botUsername
     *
     * @return void
     */
    public function setBotUsername(?string $botUsername): void
    {
        $this->botUsername = $botUsername;
    }

    /**
     * Optional. Pass True to request the permission for your bot to send messages to the user.
     *
     * @return bool|null
     */
    public function getRequestWriteAccess(): ?bool
    {
        return $this->requestWriteAccess;
    }

    /**
     * Optional. Pass True to request the permission for your bot to send messages to the user.
     *
     * @param bool|null $requestWriteAccess
     *
     * @return void
     */
    public function setRequestWriteAccess(?bool $requestWriteAccess): void
    {
        $this->requestWriteAccess = $requestWriteAccess;
    }
}
