<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class Chat
 * This object represents a chat.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class Chat implements EntityInterface
{
    /**
     * Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have
     * difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or
     * double-precision float type are safe for storing this identifier.
     *
     * @var int
     */
    private $id;

    /**
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     *
     * @var string
     */
    private $type;

    /**
     * Optional. Title, for supergroups, channels and group chats
     *
     * @var string|null
     */
    private $title;

    /**
     * Optional. Username, for private chats, supergroups and channels if available
     *
     * @var string|null
     */
    private $username;

    /**
     * Optional. First name of the other party in a private chat
     *
     * @var string|null
     */
    private $firstName;

    /**
     * Optional. Last name of the other party in a private chat
     *
     * @var string|null
     */
    private $lastName;

    /**
     * Optional. Chat photo. Returned only in getChat.
     *
     * @var ChatPhoto|null
     */
    private $photo;

    /**
     * Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
     *
     * @var string|null
     */
    private $description;

    /**
     * Optional. Chat invite link, for groups, supergroups and channel chats. Each administrator in a chat generates
     * their own invite links, so the bot must first generate the link using exportChatInviteLink. Returned only in
     * getChat.
     *
     * @var string|null
     */
    private $inviteLink;

    /**
     * Optional. Pinned message, for groups, supergroups and channels. Returned only in getChat.
     *
     * @var Message|null
     */
    private $pinnedMessage;

    /**
     * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     *
     * @var ChatPermissions|null
     */
    private $permissions;

    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged
     * user. Returned only in getChat.
     *
     * @var int|null
     */
    private $slowModeDelay;

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     *
     * @var string|null
     */
    private $stickerSetName;

    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     *
     * @var bool|null
     */
    private $canSetStickerSet;

    /**
     * Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have
     * difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or
     * double-precision float type are safe for storing this identifier.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Unique identifier for this chat. This number may be greater than 32 bits and some programming languages may have
     * difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or
     * double-precision float type are safe for storing this identifier.
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
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
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
     * Optional. Title, for supergroups, channels and group chats
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Optional. Title, for supergroups, channels and group chats
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
     * Optional. Username, for private chats, supergroups and channels if available
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Optional. Username, for private chats, supergroups and channels if available
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
     * Optional. First name of the other party in a private chat
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Optional. First name of the other party in a private chat
     *
     * @param string|null $firstName
     *
     * @return void
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Optional. Last name of the other party in a private chat
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Optional. Last name of the other party in a private chat
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
     * Optional. Chat photo. Returned only in getChat.
     *
     * @return ChatPhoto|null
     */
    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    /**
     * Optional. Chat photo. Returned only in getChat.
     *
     * @param ChatPhoto|null $photo
     *
     * @return void
     */
    public function setPhoto(?ChatPhoto $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
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
     * Optional. Chat invite link, for groups, supergroups and channel chats. Each administrator in a chat generates
     * their own invite links, so the bot must first generate the link using exportChatInviteLink. Returned only in
     * getChat.
     *
     * @return string|null
     */
    public function getInviteLink(): ?string
    {
        return $this->inviteLink;
    }

    /**
     * Optional. Chat invite link, for groups, supergroups and channel chats. Each administrator in a chat generates
     * their own invite links, so the bot must first generate the link using exportChatInviteLink. Returned only in
     * getChat.
     *
     * @param string|null $inviteLink
     *
     * @return void
     */
    public function setInviteLink(?string $inviteLink): void
    {
        $this->inviteLink = $inviteLink;
    }

    /**
     * Optional. Pinned message, for groups, supergroups and channels. Returned only in getChat.
     *
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    /**
     * Optional. Pinned message, for groups, supergroups and channels. Returned only in getChat.
     *
     * @param Message|null $pinnedMessage
     *
     * @return void
     */
    public function setPinnedMessage(?Message $pinnedMessage): void
    {
        $this->pinnedMessage = $pinnedMessage;
    }

    /**
     * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     *
     * @return ChatPermissions|null
     */
    public function getPermissions(): ?ChatPermissions
    {
        return $this->permissions;
    }

    /**
     * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     *
     * @param ChatPermissions|null $permissions
     *
     * @return void
     */
    public function setPermissions(?ChatPermissions $permissions): void
    {
        $this->permissions = $permissions;
    }

    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged
     * user. Returned only in getChat.
     *
     * @return int|null
     */
    public function getSlowModeDelay(): ?int
    {
        return $this->slowModeDelay;
    }

    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged
     * user. Returned only in getChat.
     *
     * @param int|null $slowModeDelay
     *
     * @return void
     */
    public function setSlowModeDelay(?int $slowModeDelay): void
    {
        $this->slowModeDelay = $slowModeDelay;
    }

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     *
     * @return string|null
     */
    public function getStickerSetName(): ?string
    {
        return $this->stickerSetName;
    }

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     *
     * @param string|null $stickerSetName
     *
     * @return void
     */
    public function setStickerSetName(?string $stickerSetName): void
    {
        $this->stickerSetName = $stickerSetName;
    }

    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     *
     * @return bool|null
     */
    public function getCanSetStickerSet(): ?bool
    {
        return $this->canSetStickerSet;
    }

    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     *
     * @param bool|null $canSetStickerSet
     *
     * @return void
     */
    public function setCanSetStickerSet(?bool $canSetStickerSet): void
    {
        $this->canSetStickerSet = $canSetStickerSet;
    }
}
