<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class Message
 * This object represents a message.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class Message implements EntityInterface
{
    /**
     * Unique message identifier inside this chat
     *
     * @var int
     */
    private $messageId;

    /**
     * Optional. Sender, empty for messages sent to channels
     *
     * @var User|null
     */
    private $from;

    /**
     * Date the message was sent in Unix time
     *
     * @var int
     */
    private $date;

    /**
     * Conversation the message belongs to
     *
     * @var Chat
     */
    private $chat;

    /**
     * Optional. For forwarded messages, sender of the original message
     *
     * @var User|null
     */
    private $forwardFrom;

    /**
     * Optional. For messages forwarded from channels, information about the original channel
     *
     * @var Chat|null
     */
    private $forwardFromChat;

    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel
     *
     * @var int|null
     */
    private $forwardFromMessageId;

    /**
     * Optional. For messages forwarded from channels, signature of the post author if present
     *
     * @var string|null
     */
    private $forwardSignature;

    /**
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in
     * forwarded messages
     *
     * @var string|null
     */
    private $forwardSenderName;

    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time
     *
     * @var int|null
     */
    private $forwardDate;

    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it itself is a reply.
     *
     * @var Message|null
     */
    private $replyToMessage;

    /**
     * Optional. Bot through which the message was sent
     *
     * @var User|null
     */
    private $viaBot;

    /**
     * Optional. Date the message was last edited in Unix time
     *
     * @var int|null
     */
    private $editDate;

    /**
     * Optional. The unique identifier of a media message group this message belongs to
     *
     * @var string|null
     */
    private $mediaGroupId;

    /**
     * Optional. Signature of the post author for messages in channels
     *
     * @var string|null
     */
    private $authorSignature;

    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     *
     * @var string|null
     */
    private $text;

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @var MessageEntity[]|null
     */
    private $entities;

    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this field
     * is set, the document field will also be set
     *
     * @var Animation|null
     */
    private $animation;

    /**
     * Optional. Message is an audio file, information about the file
     *
     * @var Audio|null
     */
    private $audio;

    /**
     * Optional. Message is a general file, information about the file
     *
     * @var Document|null
     */
    private $document;

    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @var PhotoSize[]|null
     */
    private $photo;

    /**
     * Optional. Message is a sticker, information about the sticker
     *
     * @var Sticker|null
     */
    private $sticker;

    /**
     * Optional. Message is a video, information about the video
     *
     * @var Video|null
     */
    private $video;

    /**
     * Optional. Message is a video note, information about the video message
     *
     * @var VideoNote|null
     */
    private $videoNote;

    /**
     * Optional. Message is a voice message, information about the file
     *
     * @var Voice|null
     */
    private $voice;

    /**
     * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
     *
     * @var string|null
     */
    private $caption;

    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in
     * the caption
     *
     * @var MessageEntity[]|null
     */
    private $captionEntities;

    /**
     * Optional. Message is a shared contact, information about the contact
     *
     * @var Contact|null
     */
    private $contact;

    /**
     * Optional. Message is a dice with random value from 1 to 6
     *
     * @var Dice|null
     */
    private $dice;

    /**
     * Optional. Message is a game, information about the game. More about games »
     *
     * @var Game|null
     */
    private $game;

    /**
     * Optional. Message is a native poll, information about the poll
     *
     * @var Poll|null
     */
    private $poll;

    /**
     * Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set,
     * the location field will also be set
     *
     * @var Venue|null
     */
    private $venue;

    /**
     * Optional. Message is a shared location, information about the location
     *
     * @var Location|null
     */
    private $location;

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may
     * be one of these members)
     *
     * @var User[]|null
     */
    private $newChatMembers;

    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     *
     * @var User|null
     */
    private $leftChatMember;

    /**
     * Optional. A chat title was changed to this value
     *
     * @var string|null
     */
    private $newChatTitle;

    /**
     * Optional. A chat photo was change to this value
     *
     * @var PhotoSize[]|null
     */
    private $newChatPhoto;

    /**
     * Optional. Service message: the chat photo was deleted
     *
     * @var bool|null
     */
    private $deleteChatPhoto;

    /**
     * Optional. Service message: the group has been created
     *
     * @var bool|null
     */
    private $groupChatCreated;

    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message coming
     * through updates, because bot can't be a member of a supergroup when it is created. It can only be found in
     * reply_to_message if someone replies to a very first message in a directly created supergroup.
     *
     * @var bool|null
     */
    private $supergroupChatCreated;

    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming through
     * updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message
     * if someone replies to a very first message in a channel.
     *
     * @var bool|null
     */
    private $channelChatCreated;

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @var int|null
     */
    private $migrateToChatId;

    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @var int|null
     */
    private $migrateFromChatId;

    /**
     * Optional. Specified message was pinned. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it is itself a reply.
     *
     * @var Message|null
     */
    private $pinnedMessage;

    /**
     * Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     *
     * @var Invoice|null
     */
    private $invoice;

    /**
     * Optional. Message is a service message about a successful payment, information about the payment. More about
     * payments »
     *
     * @var SuccessfulPayment|null
     */
    private $successfulPayment;

    /**
     * Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     *
     * @var string|null
     */
    private $connectedWebsite;

    /**
     * Optional. Telegram Passport data
     *
     * @var PassportData|null
     */
    private $passportData;

    /**
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     *
     * @var InlineKeyboardMarkup|null
     */
    private $replyMarkup;

    /**
     * Unique message identifier inside this chat
     *
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Unique message identifier inside this chat
     *
     * @param int $messageId
     *
     * @return void
     */
    public function setMessageId(int $messageId): void
    {
        $this->messageId = $messageId;
    }

    /**
     * Optional. Sender, empty for messages sent to channels
     *
     * @return User|null
     */
    public function getFrom(): ?User
    {
        return $this->from;
    }

    /**
     * Optional. Sender, empty for messages sent to channels
     *
     * @param User|null $from
     *
     * @return void
     */
    public function setFrom(?User $from): void
    {
        $this->from = $from;
    }

    /**
     * Date the message was sent in Unix time
     *
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Date the message was sent in Unix time
     *
     * @param int $date
     *
     * @return void
     */
    public function setDate(int $date): void
    {
        $this->date = $date;
    }

    /**
     * Conversation the message belongs to
     *
     * @return Chat
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * Conversation the message belongs to
     *
     * @param Chat $chat
     *
     * @return void
     */
    public function setChat(Chat $chat): void
    {
        $this->chat = $chat;
    }

    /**
     * Optional. For forwarded messages, sender of the original message
     *
     * @return User|null
     */
    public function getForwardFrom(): ?User
    {
        return $this->forwardFrom;
    }

    /**
     * Optional. For forwarded messages, sender of the original message
     *
     * @param User|null $forwardFrom
     *
     * @return void
     */
    public function setForwardFrom(?User $forwardFrom): void
    {
        $this->forwardFrom = $forwardFrom;
    }

    /**
     * Optional. For messages forwarded from channels, information about the original channel
     *
     * @return Chat|null
     */
    public function getForwardFromChat(): ?Chat
    {
        return $this->forwardFromChat;
    }

    /**
     * Optional. For messages forwarded from channels, information about the original channel
     *
     * @param Chat|null $forwardFromChat
     *
     * @return void
     */
    public function setForwardFromChat(?Chat $forwardFromChat): void
    {
        $this->forwardFromChat = $forwardFromChat;
    }

    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel
     *
     * @return int|null
     */
    public function getForwardFromMessageId(): ?int
    {
        return $this->forwardFromMessageId;
    }

    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel
     *
     * @param int|null $forwardFromMessageId
     *
     * @return void
     */
    public function setForwardFromMessageId(?int $forwardFromMessageId): void
    {
        $this->forwardFromMessageId = $forwardFromMessageId;
    }

    /**
     * Optional. For messages forwarded from channels, signature of the post author if present
     *
     * @return string|null
     */
    public function getForwardSignature(): ?string
    {
        return $this->forwardSignature;
    }

    /**
     * Optional. For messages forwarded from channels, signature of the post author if present
     *
     * @param string|null $forwardSignature
     *
     * @return void
     */
    public function setForwardSignature(?string $forwardSignature): void
    {
        $this->forwardSignature = $forwardSignature;
    }

    /**
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in
     * forwarded messages
     *
     * @return string|null
     */
    public function getForwardSenderName(): ?string
    {
        return $this->forwardSenderName;
    }

    /**
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in
     * forwarded messages
     *
     * @param string|null $forwardSenderName
     *
     * @return void
     */
    public function setForwardSenderName(?string $forwardSenderName): void
    {
        $this->forwardSenderName = $forwardSenderName;
    }

    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time
     *
     * @return int|null
     */
    public function getForwardDate(): ?int
    {
        return $this->forwardDate;
    }

    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time
     *
     * @param int|null $forwardDate
     *
     * @return void
     */
    public function setForwardDate(?int $forwardDate): void
    {
        $this->forwardDate = $forwardDate;
    }

    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it itself is a reply.
     *
     * @return Message|null
     */
    public function getReplyToMessage(): ?Message
    {
        return $this->replyToMessage;
    }

    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it itself is a reply.
     *
     * @param Message|null $replyToMessage
     *
     * @return void
     */
    public function setReplyToMessage(?Message $replyToMessage): void
    {
        $this->replyToMessage = $replyToMessage;
    }

    /**
     * Optional. Bot through which the message was sent
     *
     * @return User|null
     */
    public function getViaBot(): ?User
    {
        return $this->viaBot;
    }

    /**
     * Optional. Bot through which the message was sent
     *
     * @param User|null $viaBot
     *
     * @return void
     */
    public function setViaBot(?User $viaBot): void
    {
        $this->viaBot = $viaBot;
    }

    /**
     * Optional. Date the message was last edited in Unix time
     *
     * @return int|null
     */
    public function getEditDate(): ?int
    {
        return $this->editDate;
    }

    /**
     * Optional. Date the message was last edited in Unix time
     *
     * @param int|null $editDate
     *
     * @return void
     */
    public function setEditDate(?int $editDate): void
    {
        $this->editDate = $editDate;
    }

    /**
     * Optional. The unique identifier of a media message group this message belongs to
     *
     * @return string|null
     */
    public function getMediaGroupId(): ?string
    {
        return $this->mediaGroupId;
    }

    /**
     * Optional. The unique identifier of a media message group this message belongs to
     *
     * @param string|null $mediaGroupId
     *
     * @return void
     */
    public function setMediaGroupId(?string $mediaGroupId): void
    {
        $this->mediaGroupId = $mediaGroupId;
    }

    /**
     * Optional. Signature of the post author for messages in channels
     *
     * @return string|null
     */
    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }

    /**
     * Optional. Signature of the post author for messages in channels
     *
     * @param string|null $authorSignature
     *
     * @return void
     */
    public function setAuthorSignature(?string $authorSignature): void
    {
        $this->authorSignature = $authorSignature;
    }

    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     *
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Optional. For text messages, the actual UTF-8 text of the message, 0-4096 characters
     *
     * @param string|null $text
     *
     * @return void
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @param MessageEntity[]|null $entities
     *
     * @return void
     */
    public function setEntities(?array $entities): void
    {
        $this->entities = $entities;
    }

    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this field
     * is set, the document field will also be set
     *
     * @return Animation|null
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this field
     * is set, the document field will also be set
     *
     * @param Animation|null $animation
     *
     * @return void
     */
    public function setAnimation(?Animation $animation): void
    {
        $this->animation = $animation;
    }

    /**
     * Optional. Message is an audio file, information about the file
     *
     * @return Audio|null
     */
    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    /**
     * Optional. Message is an audio file, information about the file
     *
     * @param Audio|null $audio
     *
     * @return void
     */
    public function setAudio(?Audio $audio): void
    {
        $this->audio = $audio;
    }

    /**
     * Optional. Message is a general file, information about the file
     *
     * @return Document|null
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * Optional. Message is a general file, information about the file
     *
     * @param Document|null $document
     *
     * @return void
     */
    public function setDocument(?Document $document): void
    {
        $this->document = $document;
    }

    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @return PhotoSize[]|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @param PhotoSize[]|null $photo
     *
     * @return void
     */
    public function setPhoto(?array $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * Optional. Message is a sticker, information about the sticker
     *
     * @return Sticker|null
     */
    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    /**
     * Optional. Message is a sticker, information about the sticker
     *
     * @param Sticker|null $sticker
     *
     * @return void
     */
    public function setSticker(?Sticker $sticker): void
    {
        $this->sticker = $sticker;
    }

    /**
     * Optional. Message is a video, information about the video
     *
     * @return Video|null
     */
    public function getVideo(): ?Video
    {
        return $this->video;
    }

    /**
     * Optional. Message is a video, information about the video
     *
     * @param Video|null $video
     *
     * @return void
     */
    public function setVideo(?Video $video): void
    {
        $this->video = $video;
    }

    /**
     * Optional. Message is a video note, information about the video message
     *
     * @return VideoNote|null
     */
    public function getVideoNote(): ?VideoNote
    {
        return $this->videoNote;
    }

    /**
     * Optional. Message is a video note, information about the video message
     *
     * @param VideoNote|null $videoNote
     *
     * @return void
     */
    public function setVideoNote(?VideoNote $videoNote): void
    {
        $this->videoNote = $videoNote;
    }

    /**
     * Optional. Message is a voice message, information about the file
     *
     * @return Voice|null
     */
    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    /**
     * Optional. Message is a voice message, information about the file
     *
     * @param Voice|null $voice
     *
     * @return void
     */
    public function setVoice(?Voice $voice): void
    {
        $this->voice = $voice;
    }

    /**
     * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
     *
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
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
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in
     * the caption
     *
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in
     * the caption
     *
     * @param MessageEntity[]|null $captionEntities
     *
     * @return void
     */
    public function setCaptionEntities(?array $captionEntities): void
    {
        $this->captionEntities = $captionEntities;
    }

    /**
     * Optional. Message is a shared contact, information about the contact
     *
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * Optional. Message is a shared contact, information about the contact
     *
     * @param Contact|null $contact
     *
     * @return void
     */
    public function setContact(?Contact $contact): void
    {
        $this->contact = $contact;
    }

    /**
     * Optional. Message is a dice with random value from 1 to 6
     *
     * @return Dice|null
     */
    public function getDice(): ?Dice
    {
        return $this->dice;
    }

    /**
     * Optional. Message is a dice with random value from 1 to 6
     *
     * @param Dice|null $dice
     *
     * @return void
     */
    public function setDice(?Dice $dice): void
    {
        $this->dice = $dice;
    }

    /**
     * Optional. Message is a game, information about the game. More about games »
     *
     * @return Game|null
     */
    public function getGame(): ?Game
    {
        return $this->game;
    }

    /**
     * Optional. Message is a game, information about the game. More about games »
     *
     * @param Game|null $game
     *
     * @return void
     */
    public function setGame(?Game $game): void
    {
        $this->game = $game;
    }

    /**
     * Optional. Message is a native poll, information about the poll
     *
     * @return Poll|null
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    /**
     * Optional. Message is a native poll, information about the poll
     *
     * @param Poll|null $poll
     *
     * @return void
     */
    public function setPoll(?Poll $poll): void
    {
        $this->poll = $poll;
    }

    /**
     * Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set,
     * the location field will also be set
     *
     * @return Venue|null
     */
    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    /**
     * Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set,
     * the location field will also be set
     *
     * @param Venue|null $venue
     *
     * @return void
     */
    public function setVenue(?Venue $venue): void
    {
        $this->venue = $venue;
    }

    /**
     * Optional. Message is a shared location, information about the location
     *
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Optional. Message is a shared location, information about the location
     *
     * @param Location|null $location
     *
     * @return void
     */
    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may
     * be one of these members)
     *
     * @return User[]|null
     */
    public function getNewChatMembers(): ?array
    {
        return $this->newChatMembers;
    }

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may
     * be one of these members)
     *
     * @param User[]|null $newChatMembers
     *
     * @return void
     */
    public function setNewChatMembers(?array $newChatMembers): void
    {
        $this->newChatMembers = $newChatMembers;
    }

    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     *
     * @return User|null
     */
    public function getLeftChatMember(): ?User
    {
        return $this->leftChatMember;
    }

    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     *
     * @param User|null $leftChatMember
     *
     * @return void
     */
    public function setLeftChatMember(?User $leftChatMember): void
    {
        $this->leftChatMember = $leftChatMember;
    }

    /**
     * Optional. A chat title was changed to this value
     *
     * @return string|null
     */
    public function getNewChatTitle(): ?string
    {
        return $this->newChatTitle;
    }

    /**
     * Optional. A chat title was changed to this value
     *
     * @param string|null $newChatTitle
     *
     * @return void
     */
    public function setNewChatTitle(?string $newChatTitle): void
    {
        $this->newChatTitle = $newChatTitle;
    }

    /**
     * Optional. A chat photo was change to this value
     *
     * @return PhotoSize[]|null
     */
    public function getNewChatPhoto(): ?array
    {
        return $this->newChatPhoto;
    }

    /**
     * Optional. A chat photo was change to this value
     *
     * @param PhotoSize[]|null $newChatPhoto
     *
     * @return void
     */
    public function setNewChatPhoto(?array $newChatPhoto): void
    {
        $this->newChatPhoto = $newChatPhoto;
    }

    /**
     * Optional. Service message: the chat photo was deleted
     *
     * @return bool|null
     */
    public function getDeleteChatPhoto(): ?bool
    {
        return $this->deleteChatPhoto;
    }

    /**
     * Optional. Service message: the chat photo was deleted
     *
     * @param bool|null $deleteChatPhoto
     *
     * @return void
     */
    public function setDeleteChatPhoto(?bool $deleteChatPhoto): void
    {
        $this->deleteChatPhoto = $deleteChatPhoto;
    }

    /**
     * Optional. Service message: the group has been created
     *
     * @return bool|null
     */
    public function getGroupChatCreated(): ?bool
    {
        return $this->groupChatCreated;
    }

    /**
     * Optional. Service message: the group has been created
     *
     * @param bool|null $groupChatCreated
     *
     * @return void
     */
    public function setGroupChatCreated(?bool $groupChatCreated): void
    {
        $this->groupChatCreated = $groupChatCreated;
    }

    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message coming
     * through updates, because bot can't be a member of a supergroup when it is created. It can only be found in
     * reply_to_message if someone replies to a very first message in a directly created supergroup.
     *
     * @return bool|null
     */
    public function getSupergroupChatCreated(): ?bool
    {
        return $this->supergroupChatCreated;
    }

    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message coming
     * through updates, because bot can't be a member of a supergroup when it is created. It can only be found in
     * reply_to_message if someone replies to a very first message in a directly created supergroup.
     *
     * @param bool|null $supergroupChatCreated
     *
     * @return void
     */
    public function setSupergroupChatCreated(?bool $supergroupChatCreated): void
    {
        $this->supergroupChatCreated = $supergroupChatCreated;
    }

    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming through
     * updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message
     * if someone replies to a very first message in a channel.
     *
     * @return bool|null
     */
    public function getChannelChatCreated(): ?bool
    {
        return $this->channelChatCreated;
    }

    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming through
     * updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message
     * if someone replies to a very first message in a channel.
     *
     * @param bool|null $channelChatCreated
     *
     * @return void
     */
    public function setChannelChatCreated(?bool $channelChatCreated): void
    {
        $this->channelChatCreated = $channelChatCreated;
    }

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @return int|null
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @param int|null $migrateToChatId
     *
     * @return void
     */
    public function setMigrateToChatId(?int $migrateToChatId): void
    {
        $this->migrateToChatId = $migrateToChatId;
    }

    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @return int|null
     */
    public function getMigrateFromChatId(): ?int
    {
        return $this->migrateFromChatId;
    }

    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier. This number may be greater
     * than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is
     * smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this
     * identifier.
     *
     * @param int|null $migrateFromChatId
     *
     * @return void
     */
    public function setMigrateFromChatId(?int $migrateFromChatId): void
    {
        $this->migrateFromChatId = $migrateFromChatId;
    }

    /**
     * Optional. Specified message was pinned. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it is itself a reply.
     *
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinnedMessage;
    }

    /**
     * Optional. Specified message was pinned. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it is itself a reply.
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
     * Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     *
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     *
     * @param Invoice|null $invoice
     *
     * @return void
     */
    public function setInvoice(?Invoice $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * Optional. Message is a service message about a successful payment, information about the payment. More about
     * payments »
     *
     * @return SuccessfulPayment|null
     */
    public function getSuccessfulPayment(): ?SuccessfulPayment
    {
        return $this->successfulPayment;
    }

    /**
     * Optional. Message is a service message about a successful payment, information about the payment. More about
     * payments »
     *
     * @param SuccessfulPayment|null $successfulPayment
     *
     * @return void
     */
    public function setSuccessfulPayment(?SuccessfulPayment $successfulPayment): void
    {
        $this->successfulPayment = $successfulPayment;
    }

    /**
     * Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     *
     * @return string|null
     */
    public function getConnectedWebsite(): ?string
    {
        return $this->connectedWebsite;
    }

    /**
     * Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     *
     * @param string|null $connectedWebsite
     *
     * @return void
     */
    public function setConnectedWebsite(?string $connectedWebsite): void
    {
        $this->connectedWebsite = $connectedWebsite;
    }

    /**
     * Optional. Telegram Passport data
     *
     * @return PassportData|null
     */
    public function getPassportData(): ?PassportData
    {
        return $this->passportData;
    }

    /**
     * Optional. Telegram Passport data
     *
     * @param PassportData|null $passportData
     *
     * @return void
     */
    public function setPassportData(?PassportData $passportData): void
    {
        $this->passportData = $passportData;
    }

    /**
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     *
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    /**
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     *
     * @param InlineKeyboardMarkup|null $replyMarkup
     *
     * @return void
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): void
    {
        $this->replyMarkup = $replyMarkup;
    }
}
