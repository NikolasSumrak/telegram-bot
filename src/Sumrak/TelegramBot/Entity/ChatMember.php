<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class ChatMember
 * This object contains information about one member of a chat.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class ChatMember implements EntityInterface
{
    /**
     * Information about the user
     *
     * @var User
     */
    private $user;

    /**
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”,
     * “left” or “kicked”
     *
     * @var string
     */
    private $status;

    /**
     * Optional. Owner and administrators only. Custom title for this user
     *
     * @var string|null
     */
    private $customTitle;

    /**
     * Optional. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
     *
     * @var int|null
     */
    private $untilDate;

    /**
     * Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     *
     * @var bool|null
     */
    private $canBeEdited;

    /**
     * Optional. Administrators only. True, if the administrator can post in the channel; channels only
     *
     * @var bool|null
     */
    private $canPostMessages;

    /**
     * Optional. Administrators only. True, if the administrator can edit messages of other users and can pin messages;
     * channels only
     *
     * @var bool|null
     */
    private $canEditMessages;

    /**
     * Optional. Administrators only. True, if the administrator can delete messages of other users
     *
     * @var bool|null
     */
    private $canDeleteMessages;

    /**
     * Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
     *
     * @var bool|null
     */
    private $canRestrictMembers;

    /**
     * Optional. Administrators only. True, if the administrator can add new administrators with a subset of their own
     * privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that
     * were appointed by the user)
     *
     * @var bool|null
     */
    private $canPromoteMembers;

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and
     * other settings
     *
     * @var bool|null
     */
    private $canChangeInfo;

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
     *
     * @var bool|null
     */
    private $canInviteUsers;

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to pin messages; groups and
     * supergroups only
     *
     * @var bool|null
     */
    private $canPinMessages;

    /**
     * Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
     *
     * @var bool|null
     */
    private $isMember;

    /**
     * Optional. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @var bool|null
     */
    private $canSendMessages;

    /**
     * Optional. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video notes
     * and voice notes
     *
     * @var bool|null
     */
    private $canSendMediaMessages;

    /**
     * Optional. Restricted only. True, if the user is allowed to send polls
     *
     * @var bool|null
     */
    private $canSendPolls;

    /**
     * Optional. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
     *
     * @var bool|null
     */
    private $canSendOtherMessages;

    /**
     * Optional. Restricted only. True, if the user is allowed to add web page previews to their messages
     *
     * @var bool|null
     */
    private $canAddWebPagePreviews;

    /**
     * Information about the user
     *
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Information about the user
     *
     * @param User $user
     *
     * @return void
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”,
     * “left” or “kicked”
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”,
     * “left” or “kicked”
     *
     * @param string $status
     *
     * @return void
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Optional. Owner and administrators only. Custom title for this user
     *
     * @return string|null
     */
    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }

    /**
     * Optional. Owner and administrators only. Custom title for this user
     *
     * @param string|null $customTitle
     *
     * @return void
     */
    public function setCustomTitle(?string $customTitle): void
    {
        $this->customTitle = $customTitle;
    }

    /**
     * Optional. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
     *
     * @return int|null
     */
    public function getUntilDate(): ?int
    {
        return $this->untilDate;
    }

    /**
     * Optional. Restricted and kicked only. Date when restrictions will be lifted for this user; unix time
     *
     * @param int|null $untilDate
     *
     * @return void
     */
    public function setUntilDate(?int $untilDate): void
    {
        $this->untilDate = $untilDate;
    }

    /**
     * Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     *
     * @return bool|null
     */
    public function getCanBeEdited(): ?bool
    {
        return $this->canBeEdited;
    }

    /**
     * Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
     *
     * @param bool|null $canBeEdited
     *
     * @return void
     */
    public function setCanBeEdited(?bool $canBeEdited): void
    {
        $this->canBeEdited = $canBeEdited;
    }

    /**
     * Optional. Administrators only. True, if the administrator can post in the channel; channels only
     *
     * @return bool|null
     */
    public function getCanPostMessages(): ?bool
    {
        return $this->canPostMessages;
    }

    /**
     * Optional. Administrators only. True, if the administrator can post in the channel; channels only
     *
     * @param bool|null $canPostMessages
     *
     * @return void
     */
    public function setCanPostMessages(?bool $canPostMessages): void
    {
        $this->canPostMessages = $canPostMessages;
    }

    /**
     * Optional. Administrators only. True, if the administrator can edit messages of other users and can pin messages;
     * channels only
     *
     * @return bool|null
     */
    public function getCanEditMessages(): ?bool
    {
        return $this->canEditMessages;
    }

    /**
     * Optional. Administrators only. True, if the administrator can edit messages of other users and can pin messages;
     * channels only
     *
     * @param bool|null $canEditMessages
     *
     * @return void
     */
    public function setCanEditMessages(?bool $canEditMessages): void
    {
        $this->canEditMessages = $canEditMessages;
    }

    /**
     * Optional. Administrators only. True, if the administrator can delete messages of other users
     *
     * @return bool|null
     */
    public function getCanDeleteMessages(): ?bool
    {
        return $this->canDeleteMessages;
    }

    /**
     * Optional. Administrators only. True, if the administrator can delete messages of other users
     *
     * @param bool|null $canDeleteMessages
     *
     * @return void
     */
    public function setCanDeleteMessages(?bool $canDeleteMessages): void
    {
        $this->canDeleteMessages = $canDeleteMessages;
    }

    /**
     * Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
     *
     * @return bool|null
     */
    public function getCanRestrictMembers(): ?bool
    {
        return $this->canRestrictMembers;
    }

    /**
     * Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
     *
     * @param bool|null $canRestrictMembers
     *
     * @return void
     */
    public function setCanRestrictMembers(?bool $canRestrictMembers): void
    {
        $this->canRestrictMembers = $canRestrictMembers;
    }

    /**
     * Optional. Administrators only. True, if the administrator can add new administrators with a subset of their own
     * privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that
     * were appointed by the user)
     *
     * @return bool|null
     */
    public function getCanPromoteMembers(): ?bool
    {
        return $this->canPromoteMembers;
    }

    /**
     * Optional. Administrators only. True, if the administrator can add new administrators with a subset of their own
     * privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that
     * were appointed by the user)
     *
     * @param bool|null $canPromoteMembers
     *
     * @return void
     */
    public function setCanPromoteMembers(?bool $canPromoteMembers): void
    {
        $this->canPromoteMembers = $canPromoteMembers;
    }

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and
     * other settings
     *
     * @return bool|null
     */
    public function getCanChangeInfo(): ?bool
    {
        return $this->canChangeInfo;
    }

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and
     * other settings
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
     * Optional. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
     *
     * @return bool|null
     */
    public function getCanInviteUsers(): ?bool
    {
        return $this->canInviteUsers;
    }

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
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
     * Optional. Administrators and restricted only. True, if the user is allowed to pin messages; groups and
     * supergroups only
     *
     * @return bool|null
     */
    public function getCanPinMessages(): ?bool
    {
        return $this->canPinMessages;
    }

    /**
     * Optional. Administrators and restricted only. True, if the user is allowed to pin messages; groups and
     * supergroups only
     *
     * @param bool|null $canPinMessages
     *
     * @return void
     */
    public function setCanPinMessages(?bool $canPinMessages): void
    {
        $this->canPinMessages = $canPinMessages;
    }

    /**
     * Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
     *
     * @return bool|null
     */
    public function getIsMember(): ?bool
    {
        return $this->isMember;
    }

    /**
     * Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
     *
     * @param bool|null $isMember
     *
     * @return void
     */
    public function setIsMember(?bool $isMember): void
    {
        $this->isMember = $isMember;
    }

    /**
     * Optional. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
     *
     * @return bool|null
     */
    public function getCanSendMessages(): ?bool
    {
        return $this->canSendMessages;
    }

    /**
     * Optional. Restricted only. True, if the user is allowed to send text messages, contacts, locations and venues
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
     * Optional. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video notes
     * and voice notes
     *
     * @return bool|null
     */
    public function getCanSendMediaMessages(): ?bool
    {
        return $this->canSendMediaMessages;
    }

    /**
     * Optional. Restricted only. True, if the user is allowed to send audios, documents, photos, videos, video notes
     * and voice notes
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
     * Optional. Restricted only. True, if the user is allowed to send polls
     *
     * @return bool|null
     */
    public function getCanSendPolls(): ?bool
    {
        return $this->canSendPolls;
    }

    /**
     * Optional. Restricted only. True, if the user is allowed to send polls
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
     * Optional. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
     *
     * @return bool|null
     */
    public function getCanSendOtherMessages(): ?bool
    {
        return $this->canSendOtherMessages;
    }

    /**
     * Optional. Restricted only. True, if the user is allowed to send animations, games, stickers and use inline bots
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
     * Optional. Restricted only. True, if the user is allowed to add web page previews to their messages
     *
     * @return bool|null
     */
    public function getCanAddWebPagePreviews(): ?bool
    {
        return $this->canAddWebPagePreviews;
    }

    /**
     * Optional. Restricted only. True, if the user is allowed to add web page previews to their messages
     *
     * @param bool|null $canAddWebPagePreviews
     *
     * @return void
     */
    public function setCanAddWebPagePreviews(?bool $canAddWebPagePreviews): void
    {
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
    }
}
