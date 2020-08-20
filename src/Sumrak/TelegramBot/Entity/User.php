<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class User
 * This object represents a Telegram user or bot.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class User implements EntityInterface
{
    /**
     * Unique identifier for this user or bot
     *
     * @var int
     */
    private $id;

    /**
     * True, if this user is a bot
     *
     * @var bool
     */
    private $isBot;

    /**
     * User's or bot's first name
     *
     * @var string
     */
    private $firstName;

    /**
     * Optional. User's or bot's last name
     *
     * @var string|null
     */
    private $lastName;

    /**
     * Optional. User's or bot's username
     *
     * @var string|null
     */
    private $username;

    /**
     * Optional. IETF language tag of the user's language
     *
     * @var string|null
     */
    private $languageCode;

    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     *
     * @var bool|null
     */
    private $canJoinGroups;

    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     *
     * @var bool|null
     */
    private $canReadAllGroupMessages;

    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     *
     * @var bool|null
     */
    private $supportsInlineQueries;

    /**
     * Unique identifier for this user or bot
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Unique identifier for this user or bot
     *
     * @param int $id
     *
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * True, if this user is a bot
     *
     * @return bool
     */
    public function getIsBot(): bool
    {
        return $this->isBot;
    }

    /**
     * True, if this user is a bot
     *
     * @param bool $isBot
     *
     * @return void
     */
    public function setIsBot(bool $isBot): void
    {
        $this->isBot = $isBot;
    }

    /**
     * User's or bot's first name
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * User's or bot's first name
     *
     * @param string $firstName
     *
     * @return void
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Optional. User's or bot's last name
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Optional. User's or bot's last name
     *
     * @param string|null $lastName
     *
     * @return void
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Optional. User's or bot's username
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Optional. User's or bot's username
     *
     * @param string|null $username
     *
     * @return void
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * Optional. IETF language tag of the user's language
     *
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    /**
     * Optional. IETF language tag of the user's language
     *
     * @param string|null $languageCode
     *
     * @return void
     */
    public function setLanguageCode(?string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     *
     * @return bool|null
     */
    public function getCanJoinGroups(): ?bool
    {
        return $this->canJoinGroups;
    }

    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     *
     * @param bool|null $canJoinGroups
     *
     * @return void
     */
    public function setCanJoinGroups(?bool $canJoinGroups): void
    {
        $this->canJoinGroups = $canJoinGroups;
    }

    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     *
     * @return bool|null
     */
    public function getCanReadAllGroupMessages(): ?bool
    {
        return $this->canReadAllGroupMessages;
    }

    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     *
     * @param bool|null $canReadAllGroupMessages
     *
     * @return void
     */
    public function setCanReadAllGroupMessages(?bool $canReadAllGroupMessages): void
    {
        $this->canReadAllGroupMessages = $canReadAllGroupMessages;
    }

    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     *
     * @return bool|null
     */
    public function getSupportsInlineQueries(): ?bool
    {
        return $this->supportsInlineQueries;
    }

    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     *
     * @param bool|null $supportsInlineQueries
     *
     * @return void
     */
    public function setSupportsInlineQueries(?bool $supportsInlineQueries): void
    {
        $this->supportsInlineQueries = $supportsInlineQueries;
    }
}
