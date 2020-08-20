<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class ChatPermissions
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class ChatPermissions implements EntityInterface
{
    /**
     * Optional. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @var bool|null
     */
    private $canSendMessages;

    /**
     * Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes,
     * implies can_send_messages
     *
     * @var bool|null
     */
    private $canSendMediaMessages;

    /**
     * Optional. True, if the user is allowed to send polls, implies can_send_messages
     *
     * @var bool|null
     */
    private $canSendPolls;

    /**
     * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies
     * can_send_media_messages
     *
     * @var bool|null
     */
    private $canSendOtherMessages;

    /**
     * Optional. True, if the user is allowed to add web page previews to their messages, implies
     * can_send_media_messages
     *
     * @var bool|null
     */
    private $canAddWebPagePreviews;

    /**
     * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public
     * supergroups
     *
     * @var bool|null
     */
    private $canChangeInfo;

    /**
     * Optional. True, if the user is allowed to invite new users to the chat
     *
     * @var bool|null
     */
    private $canInviteUsers;

    /**
     * Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     *
     * @var bool|null
     */
    private $canPinMessages;

    /**
     * Optional. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @return bool|null
     */
    public function getCanSendMessages(): ?bool
    {
        return $this->canSendMessages;
    }

    /**
     * Optional. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @param bool|null $canSendMessages
     *
     * @return void
     */
    public function setCanSendMessages(?bool $canSendMessages): void
    {
        $this->canSendMessages = $canSendMessages;
    }

    /**
     * Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes,
     * implies can_send_messages
     *
     * @return bool|null
     */
    public function getCanSendMediaMessages(): ?bool
    {
        return $this->canSendMediaMessages;
    }

    /**
     * Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes,
     * implies can_send_messages
     *
     * @param bool|null $canSendMediaMessages
     *
     * @return void
     */
    public function setCanSendMediaMessages(?bool $canSendMediaMessages): void
    {
        $this->canSendMediaMessages = $canSendMediaMessages;
    }

    /**
     * Optional. True, if the user is allowed to send polls, implies can_send_messages
     *
     * @return bool|null
     */
    public function getCanSendPolls(): ?bool
    {
        return $this->canSendPolls;
    }

    /**
     * Optional. True, if the user is allowed to send polls, implies can_send_messages
     *
     * @param bool|null $canSendPolls
     *
     * @return void
     */
    public function setCanSendPolls(?bool $canSendPolls): void
    {
        $this->canSendPolls = $canSendPolls;
    }

    /**
     * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies
     * can_send_media_messages
     *
     * @return bool|null
     */
    public function getCanSendOtherMessages(): ?bool
    {
        return $this->canSendOtherMessages;
    }

    /**
     * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies
     * can_send_media_messages
     *
     * @param bool|null $canSendOtherMessages
     *
     * @return void
     */
    public function setCanSendOtherMessages(?bool $canSendOtherMessages): void
    {
        $this->canSendOtherMessages = $canSendOtherMessages;
    }

    /**
     * Optional. True, if the user is allowed to add web page previews to their messages, implies
     * can_send_media_messages
     *
     * @return bool|null
     */
    public function getCanAddWebPagePreviews(): ?bool
    {
        return $this->canAddWebPagePreviews;
    }

    /**
     * Optional. True, if the user is allowed to add web page previews to their messages, implies
     * can_send_media_messages
     *
     * @param bool|null $canAddWebPagePreviews
     *
     * @return void
     */
    public function setCanAddWebPagePreviews(?bool $canAddWebPagePreviews): void
    {
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
    }

    /**
     * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public
     * supergroups
     *
     * @return bool|null
     */
    public function getCanChangeInfo(): ?bool
    {
        return $this->canChangeInfo;
    }

    /**
     * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public
     * supergroups
     *
     * @param bool|null $canChangeInfo
     *
     * @return void
     */
    public function setCanChangeInfo(?bool $canChangeInfo): void
    {
        $this->canChangeInfo = $canChangeInfo;
    }

    /**
     * Optional. True, if the user is allowed to invite new users to the chat
     *
     * @return bool|null
     */
    public function getCanInviteUsers(): ?bool
    {
        return $this->canInviteUsers;
    }

    /**
     * Optional. True, if the user is allowed to invite new users to the chat
     *
     * @param bool|null $canInviteUsers
     *
     * @return void
     */
    public function setCanInviteUsers(?bool $canInviteUsers): void
    {
        $this->canInviteUsers = $canInviteUsers;
    }

    /**
     * Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     *
     * @return bool|null
     */
    public function getCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    /**
     * Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     *
     * @param bool|null $canPinMessages
     *
     * @return void
     */
    public function setCanPinMessages(?bool $canPinMessages): void
    {
        $this->canPinMessages = $canPinMessages;
    }
}
