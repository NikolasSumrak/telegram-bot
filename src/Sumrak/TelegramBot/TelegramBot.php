<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot;

use Sumrak\TelegramBot\Entity\InputFile;
use Sumrak\TelegramBot\Entity\InputMediaInterface;
use Sumrak\TelegramBot\Entity\InputMediaPhoto;
use Sumrak\TelegramBot\Entity\InputMediaVideo;
use Sumrak\TelegramBot\Entity\Message;
use Sumrak\TelegramBot\Entity\ReplyMarkupInterface;

class TelegramBot
{
    public const PARSE_MODE_HTML = 'HTML';
    public const PARSE_MODE_MARKDOWN = 'Markdown';
    public const PARSE_MODE_MARKDOWN_V2 = 'MarkdownV2';

    /**
     * @var ApiAdapterInterface
     */
    private $apiAdapter;

    /**
     * @var Serializer\TelegramApiSerializerInterface
     */
    private $serializer;

    public function __construct(TelegramBotContext $telegramBotContext)
    {
        $this->apiAdapter = $telegramBotContext->getApiAdapter();
        $this->apiAdapter->setBotToken($telegramBotContext->getBotToken());
        $this->apiAdapter->setClient($telegramBotContext->getHttpClient());
        $this->apiAdapter->setSerializer($telegramBotContext->getSerializer());
        $this->serializer = $telegramBotContext->getSerializer();
    }

    /**
     * Getting updates for bot
     *
     * @param int|null $offset
     * @param int|null $limit
     * @param int|null $timeout
     * @param array|null $allowedUpdates
     *
     * @return \Sumrak\TelegramBot\Entity\Update[]
     */
    public function getUpdates(
        ?int $offset = null,
        ?int $limit = null,
        ?int $timeout = null,
        ?array $allowedUpdates = null
    ): array {
        if (!empty($allowedUpdates)) {
            // @TODO use serializer?
            $allowedUpdates = \json_encode($allowedUpdates);
        }
        $response = $this->apiAdapter->call('getUpdates', [
            'offset' => $offset,
            'limit' => $limit,
            'timeout' => $timeout,
            'allowed_updates' => $allowedUpdates
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Update::class . '[]',
            $response
        );
    }

    /**
     * A simple method for testing your bot's auth token. Requires no parameters.
     * Returns basic information about the bot in form of a User object.
     *
     * @return \Sumrak\TelegramBot\Entity\User
     */
    public function getMe(): \Sumrak\TelegramBot\Entity\User
    {
        $response = $this->apiAdapter->call('getMe');

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\User::class,
            $response
        );
    }

    /**
     * Use this method to send text messages. On success, the sent Message is returned.
     *
     * @param int|string $chatId Yes
     * @param string $text Yes
     * @param string|null $parseMode Optional
     * @param bool|null $disableWebPagePreview Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendMessage(
        $chatId,
        string $text,
        ?string $parseMode = null,
        ?bool $disableWebPagePreview = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): Message {
        $response = $this->apiAdapter->call('sendMessage', [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => $parseMode,
            'disable_web_page_preview' => $disableWebPagePreview,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to forward messages of any kind. On success, the sent Message is returned.
     *
     * @param int|string $chatId
     * @param int|string $fromChatId
     * @param int $messageId
     * @param bool|null $disableNotification
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function forwardMessage($chatId, $fromChatId, int $messageId, ?bool $disableNotification = null): Message
    {
        $response = $this->apiAdapter->call('forwardMessage', [
            'chat_id' => $chatId,
            'from_chat_id' => $fromChatId,
            'message_id' => $messageId,
            'disable_notification' => $disableNotification,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send photos. On success, the sent Message is returned.
     *
     * @param int|string $chatId Yes
     * @param \Sumrak\TelegramBot\Entity\InputFile|string $photo Yes
     * @param string|null $caption Optional
     * @param string|null $parseMode Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendPhoto(
        $chatId,
        $photo,
        ?string $caption = null,
        ?string $parseMode = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): Message {
        $response = $this->apiAdapter->call('sendPhoto', [
            'chat_id' => $chatId,
            'photo' => $photo,
            'caption' => $caption,
            'parse_mode' => $parseMode,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display them in the music player.
     * Your audio must be in the .mp3 format. On success, the sent Message is returned. Bots can currently send
     * audio files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chatId Yes
     * @param \Sumrak\TelegramBot\Entity\InputFile|string $audio Yes
     * @param string|null $caption Optional
     * @param string|null $parseMode Optional
     * @param int|null $duration Optional
     * @param string|null $performer Optional
     * @param string|null $title Optional
     * @param \Sumrak\TelegramBot\Entity\InputFile|string|null $thumb Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendAudio(
        $chatId,
        $audio,
        ?string $caption = null,
        ?string $parseMode = null,
        ?int $duration = null,
        ?string $performer = null,
        ?string $title = null,
        $thumb = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendAudio', [
            'chat_id' => $chatId,
            'audio' => $audio,
            'caption' => $caption,
            'parse_mode' => $parseMode,
            'duration' => $duration,
            'performer' => $performer,
            'title' => $title,
            'thumb' => $thumb,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send general files. On success, the sent Message is returned. Bots can currently send
     * files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chatId Yes
     * @param \Sumrak\TelegramBot\Entity\InputFile|string $document Yes
     * @param \Sumrak\TelegramBot\Entity\InputFile|string|null $thumb Optional
     * @param string|null $caption Optional
     * @param string|null $parseMode Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendDocument(
        $chatId,
        $document,
        $thumb = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendDocument', [
            'chat_id' => $chatId,
            'document' => $document,
            'thumb' => $thumb,
            'caption' => $caption,
            'parse_mode' => $parseMode,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send video files, Telegram clients support mp4 videos (other formats may be sent as Document).
     * On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size,
     * this limit may be changed in the future.
     *
     * @param int|string $chatId Yes
     * @param \Sumrak\TelegramBot\Entity\InputFile|string $video Yes
     * @param int|null $duration Optional
     * @param int|null $width Optional
     * @param int|null $height Optional
     * @param \Sumrak\TelegramBot\Entity\InputFile|string|null $thumb Optional
     * @param string|null $caption Optional
     * @param string|null $parseMode Optional
     * @param bool|null $supportsStreaming Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendVideo(
        $chatId,
        $video,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        $thumb = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?bool $supportsStreaming = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendVideo', [
            'chat_id' => $chatId,
            'video' => $video,
            'duration' => $duration,
            'width' => $width,
            'height' => $height,
            'thumb' => $thumb,
            'caption' => $caption,
            'parse_mode' => $parseMode,
            'supports_streaming' => $supportsStreaming,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound).
     * On success, the sent Message is returned. Bots can currently send animation files of up to 50 MB in size,
     * this limit may be changed in the future.
     *
     * @param int|string $chatId Yes
     * @param \Sumrak\TelegramBot\Entity\InputFile|string $animation
     * @param int|null $duration Optional
     * @param int|null $width Optional
     * @param int|null $height Optional
     * @param \Sumrak\TelegramBot\Entity\InputFile|string|null $thumb
     * @param string|null $caption Optional
     * @param string|null $parseMode Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendAnimation(
        $chatId,
        $animation,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        $thumb = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendAnimation', [
            'chat_id' => $chatId,
            'animation' => $animation,
            'duration' => $duration,
            'width' => $width,
            'height' => $height,
            'thumb' => $thumb,
            'caption' => $caption,
            'parse_mode' => $parseMode,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display the file as a
     * playable voice message. For this to work, your audio must be in an .ogg file encoded with
     * OPUS (other formats may be sent as Audio or Document). On success, the sent Message is returned.
     * Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string $chatId Yes
     * @param \Sumrak\TelegramBot\Entity\InputFile|string $voice Yes
     * @param string|null $caption Optional
     * @param string|null $parseMode Optional
     * @param int|null $duration Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendVoice(
        $chatId,
        $voice,
        ?string $caption = null,
        ?string $parseMode = null,
        ?int $duration = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendVoice', [
            'chat_id' => $chatId,
            'voice' => $voice,
            'caption' => $caption,
            'parse_mode' => $parseMode,
            'duration' => $duration,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * As of v.4.0, Telegram clients support rounded square mp4 videos of up to 1 minute long.
     * Use this method to send video messages. On success, the sent Message is returned.
     *
     * @param int|string $chatId Yes
     * @param \Sumrak\TelegramBot\Entity\InputFile|string $videoNote Yes
     * @param int|null $duration Optional
     * @param int|null $length Optional
     * @param \Sumrak\TelegramBot\Entity\InputFile|string|null $thumb Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendVideoNote(
        $chatId,
        $videoNote,
        ?int $duration = null,
        ?int $length = null,
        $thumb = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendVideoNote', [
            'chat_id' => $chatId,
            'video_note' => $videoNote,
            'duration' => $duration,
            'length' => $length,
            'thumb' => $thumb,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send a group of photos or videos as an album.
     * On success, an array of the sent Messages is returned.
     *
     * @param int|string $chatId Yes
     * @param InputMediaPhoto[]|InputMediaVideo[] $media
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message[]
     */
    public function sendMediaGroup(
        $chatId,
        array $media,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null
    ): array {
        $response = $this->apiAdapter->call('sendMediaGroup', [
            'chat_id' => $chatId,
            'media' => $media,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class . '[]',
            $response
        );
    }

    /**
     * Use this method to send point on the map. On success, the sent Message is returned.
     *
     * @param int|string $chatId Yes
     * @param float $latitude Yes
     * @param float $longitude Yes
     * @param int|null $livePeriod Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendLocation(
        $chatId,
        float $latitude,
        float $longitude,
        ?int $livePeriod = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendLocation', [
            'chat_id' => $chatId,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'live_period' => $livePeriod,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to edit live location messages.
     * A location can be edited until its live_period expires or editing is explicitly disabled by a call to
     * stopMessageLiveLocation. On success, if the edited message was sent by the bot,
     * the edited Message is returned, otherwise True is returned.
     *
     * @param float $latitude Yes
     * @param float $longitude Yes
     * @param int|string|null $chatId Optional
     * @param int|null $messageId Optional
     * @param string|null $inlineMessageId Optional
     * @param \Sumrak\TelegramBot\Entity\InlineKeyboardMarkup|null $replyMarkup Optional
     *
     * @return Message|bool
     */
    public function editMessageLiveLocation(
        $latitude,
        $longitude,
        $chatId = null,
        $messageId = null,
        $inlineMessageId = null,
        ?\Sumrak\TelegramBot\Entity\InlineKeyboardMarkup $replyMarkup = null
    ) {
        $response = $this->apiAdapter->call('editMessageLiveLocation', [
            'latitude' => $latitude,
            'longitude' => $longitude,
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'inline_message_id' => $inlineMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        if ($response === 'true') {
            return true;
        }

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to stop updating a live location message before live_period expires.
     * On success, if the message was sent by the bot, the sent Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chatId Optional
     * @param int|null $messageId Optional
     * @param string|null $inlineMessageId Optional
     * @param \Sumrak\TelegramBot\Entity\InlineKeyboardMarkup|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function stopMessageLiveLocation(
        $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?\Sumrak\TelegramBot\Entity\InlineKeyboardMarkup $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('stopMessageLiveLocation', [
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'inline_message_id' => $inlineMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send information about a venue. On success, the sent Message is returned.
     *
     * @param int|string $chatId Yes
     * @param float $latitude Yes
     * @param float $longitude Yes
     * @param string $title Yes
     * @param string $address Yes
     * @param string|null $foursquareId Optional
     * @param string|null $foursquareType Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendVenue(
        $chatId,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?string $foursquareId = null,
        ?string $foursquareType = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendVenue', [
            'chat_id' => $chatId,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'title' => $title,
            'address' => $address,
            'foursquare_id' => $foursquareId,
            'foursquare_type' => $foursquareType,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send phone contacts. On success, the sent Message is returned.
     *
     * @param int|string $chatId Yes
     * @param string $phoneNumber Yes
     * @param string $firstName Yes
     * @param string|null $lastName Optional
     * @param string|null $vcard Optional
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendContact(
        $chatId,
        string $phoneNumber,
        string $firstName,
        ?string $lastName = null,
        ?string $vcard = null,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendContact', [
            'chat_id' => $chatId,
            'phone_number' => $phoneNumber,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'vcard' => $vcard,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to send a native poll. A native poll can't be sent to a private chat.
     * On success, the sent Message is returned.
     *
     * @param int|string $chatId Yes
     * @param string $question Yes
     * @param String[] $options Yes
     * @param bool|null $disableNotification Optional
     * @param int|null $replyToMessageId Optional
     * @param ReplyMarkupInterface|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message
     */
    public function sendPoll(
        $chatId,
        string $question,
        array $options,
        ?bool $disableNotification = null,
        ?int $replyToMessageId = null,
        ?ReplyMarkupInterface $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Message {
        $response = $this->apiAdapter->call('sendPoll', [
            'chat_id' => $chatId,
            'question' => $question,
            'options' => $options,
            'disable_notification' => $disableNotification,
            'reply_to_message_id' => $replyToMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method when you need to tell the user that something is happening on the bot's side.
     * The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients
     * clear its typing status). Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param string $action Yes
     *
     * @return bool
     */
    public function sendChatAction($chatId, string $action): bool
    {
        $response = $this->apiAdapter->call('sendChatAction', [
            'chat_id' => $chatId,
            'action' => $action,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
     *
     * @param int $userId Yes
     * @param int|null $offset Optional
     * @param int|null $limit Optional
     *
     * @return \Sumrak\TelegramBot\Entity\UserProfilePhotos
     */
    public function getUserProfilePhotos(
        int $userId,
        ?int $offset = null,
        ?int $limit = null
    ): \Sumrak\TelegramBot\Entity\UserProfilePhotos {
        $response = $this->apiAdapter->call('getUserProfilePhotos', [
            'user_id' => $userId,
            'offset' => $offset,
            'limit' => $limit,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\UserProfilePhotos::class,
            $response
        );
    }

    /**
     * Use this method to get basic info about a file and prepare it for downloading.
     * For the moment, bots can download files of up to 20MB in size.
     * On success, a File object is returned. The file can then be downloaded via the
     * link https://api.telegram.org/file/bot&lt;token&gt;/&lt;file_path&gt;, where &lt;file_path&gt;
     * is taken from the response. It is guaranteed that the link will be valid for at least 1 hour.
     * When the link expires, a new one can be requested by calling getFile again.
     *
     * @param string $fileId Yes
     *
     * @return \Sumrak\TelegramBot\Entity\File
     */
    public function getFile(string $fileId): \Sumrak\TelegramBot\Entity\File
    {
        $response = $this->apiAdapter->call('getFile', [
            'file_id' => $fileId,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\File::class,
            $response
        );
    }

    /**
     * Download File by file path
     * @param string $filePath
     *
     * @return string
     */
    public function getFileContent(string $filePath): string
    {
        return $this->apiAdapter->call($filePath);
    }

    /**
     * Use this method to kick a user from a group, a supergroup or a channel.
     * In the case of supergroups and channels, the user will not be able to return to the group
     * on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the
     * chat for this to work and must have the appropriate admin rights. Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param int $userId Yes
     * @param int|null $untilDate Optional
     *
     * @return bool
     */
    public function kickChatMember($chatId, int $userId, ?int $untilDate = null): bool
    {
        $response = $this->apiAdapter->call('kickChatMember', [
            'chat_id' => $chatId,
            'user_id' => $userId,
            'until_date' => $untilDate,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to unban a previously kicked user in a supergroup or channel.
     * The user will not return to the group or channel automatically, but will be able to join via link, etc.
     * The bot must be an administrator for this to work. Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param int $userId Yes
     * @return bool
     */
    public function unbanChatMember($chatId, $userId): bool
    {
        $response = $this->apiAdapter->call('unbanChatMember', [
            'chat_id' => $chatId,
            'user_id' => $userId,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for
     * this to work and must have the appropriate admin rights. Pass True for all boolean parameters to lift
     * restrictions from a user. Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param int $userId Yes
     * @param int|null $untilDate Optional
     * @param bool|null $canSendMessages Optional
     * @param bool|null $canSendMediaMessages Optional
     * @param bool|null $canSendOtherMessages Optional
     * @param bool|null $canAddWebPagePreviews Optional
     * @return bool
     */
    public function restrictChatMember(
        $chatId,
        $userId,
        $untilDate = null,
        $canSendMessages = null,
        $canSendMediaMessages = null,
        $canSendOtherMessages = null,
        $canAddWebPagePreviews = null
    ): bool {
        $response = $this->apiAdapter->call('restrictChatMember', [
            'chat_id' => $chatId,
            'user_id' => $userId,
            'until_date' => $untilDate,
            'can_send_messages' => $canSendMessages,
            'can_send_media_messages' => $canSendMediaMessages,
            'can_send_other_messages' => $canSendOtherMessages,
            'can_add_web_page_previews' => $canAddWebPagePreviews,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to promote or demote a user in a supergroup or a channel.
     * The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Pass False for all boolean parameters to demote a user. Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param int $userId Yes
     * @param bool|null $canChangeInfo Optional
     * @param bool|null $canPostMessages Optional
     * @param bool|null $canEditMessages Optional
     * @param bool|null $canDeleteMessages Optional
     * @param bool|null $canInviteUsers Optional
     * @param bool|null $canRestrictMembers Optional
     * @param bool|null $canPinMessages Optional
     * @param bool|null $canPromoteMembers Optional
     * @return bool
     */
    public function promoteChatMember(
        $chatId,
        $userId,
        $canChangeInfo = null,
        $canPostMessages = null,
        $canEditMessages = null,
        $canDeleteMessages = null,
        $canInviteUsers = null,
        $canRestrictMembers = null,
        $canPinMessages = null,
        $canPromoteMembers = null
    ): bool {
        $response = $this->apiAdapter->call('promoteChatMember', [
            'chat_id' => $chatId,
            'user_id' => $userId,
            'can_change_info' => $canChangeInfo,
            'can_post_messages' => $canPostMessages,
            'can_edit_messages' => $canEditMessages,
            'can_delete_messages' => $canDeleteMessages,
            'can_invite_users' => $canInviteUsers,
            'can_restrict_members' => $canRestrictMembers,
            'can_pin_messages' => $canPinMessages,
            'can_promote_members' => $canPromoteMembers,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to generate a new invite link for a chat; any previously generated link is revoked.
     * The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Returns the new invite link as String on success.
     *
     * @param int|string $chatId Yes
     * @return string
     */
    public function exportChatInviteLink($chatId): string
    {
        return $this->apiAdapter->call('exportChatInviteLink', [
            'chat_id' => $chatId,
        ]);
    }

    /**
     * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats.
     * The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param \Sumrak\TelegramBot\Entity\InputFile $photo Yes
     *
     * @return bool
     */
    public function setChatPhoto($chatId, $photo): bool
    {
        $response = $this->apiAdapter->call('setChatPhoto', [
            'chat_id' => $chatId,
            'photo' => $photo,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to delete a chat photo. Photos can't be changed for private chats.
     * The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Returns True on success.
     *
     * @param int|string $chatId Yes
     *
     * @return bool
     */
    public function deleteChatPhoto($chatId): bool
    {
        $response = $this->apiAdapter->call('deleteChatPhoto', [
            'chat_id' => $chatId,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to change the title of a chat. Titles can't be changed for private chats.
     * The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param string $title Yes
     *
     * @return bool
     */
    public function setChatTitle($chatId, $title): bool
    {
        $response = $this->apiAdapter->call('setChatTitle', [
            'chat_id' => $chatId,
            'title' => $title,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to change the description of a supergroup or a channel.
     * The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param string|null $description Optional
     * @return bool
     */
    public function setChatDescription($chatId, ?string $description = null): bool
    {
        $response = $this->apiAdapter->call('setChatDescription', [
            'chat_id' => $chatId,
            'description' => $description,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to pin a message in a group, a supergroup, or a channel.
     * The bot must be an administrator in the chat for this to work and must have the ‘can_pin_messages’
     * admin right in the supergroup or ‘can_edit_messages’ admin right in the channel.
     * Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param int $messageId Yes
     * @param bool|null $disableNotification Optional
     * @return bool
     */
    public function pinChatMessage($chatId, int $messageId, ?bool $disableNotification = null): bool
    {
        $response = $this->apiAdapter->call('pinChatMessage', [
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'disable_notification' => $disableNotification,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to unpin a message in a group, a supergroup, or a channel.
     * The bot must be an administrator in the chat for this to work and must have the ‘can_pin_messages’
     * admin right in the supergroup or ‘can_edit_messages’ admin right in the channel.
     * Returns True on success.
     *
     * @param int|string $chatId Yes
     *
     * @return bool
     */
    public function unpinChatMessage($chatId): bool
    {
        $response = $this->apiAdapter->call('unpinChatMessage', [
            'chat_id' => $chatId,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
     *
     * @param int|string $chatId Yes
     * @return bool
     */
    public function leaveChat($chatId): bool
    {
        $response = $this->apiAdapter->call('leaveChat', [
            'chat_id' => $chatId,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to get up to date information about the chat (current name of the user for one-on-one
     * conversations, current username of a user, group or channel, etc.). Returns a Chat object on success.
     *
     * @param int|string $chatId Yes
     * @return \Sumrak\TelegramBot\Entity\Chat
     */
    public function getChat($chatId): \Sumrak\TelegramBot\Entity\Chat
    {
        $response = $this->apiAdapter->call('getChat', [
            'chat_id' => $chatId,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Chat::class,
            $response
        );
    }

    /**
     * Use this method to get a list of administrators in a chat.
     * On success, returns an Array of ChatMember objects that contains information about all chat
     * administrators except other bots. If the chat is a group or a supergroup and no administrators were appointed,
     * only the creator will be returned.
     *
     * @param int|string $chatId Yes
     * @return \Sumrak\TelegramBot\Entity\ChatMember[]
     */
    public function getChatAdministrators($chatId): array
    {
        $response = $this->apiAdapter->call('getChatAdministrators', [
            'chat_id' => $chatId,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\ChatMember::class . '[]',
            $response
        );
    }

    /**
     * Use this method to get the number of members in a chat. Returns Int on success.
     *
     * @param int|string $chatId Yes
     * @return int
     */
    public function getChatMembersCount($chatId): int
    {
        $response = $this->apiAdapter->call('getChatMembersCount', [
            'chat_id' => $chatId,
        ]);

        return $this->serializer->deserialize(
            'int',
            $response
        );
    }

    /**
     * Use this method to get information about a member of a chat. Returns a ChatMember object on success.
     *
     * @param int|string $chatId Yes
     * @param int $userId Yes
     * @return \Sumrak\TelegramBot\Entity\ChatMember
     */
    public function getChatMember($chatId, int $userId): \Sumrak\TelegramBot\Entity\ChatMember
    {
        $response = $this->apiAdapter->call('getChatMember', [
            'chat_id' => $chatId,
            'user_id' => $userId,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\ChatMember::class,
            $response
        );
    }

    /**
     * Use this method to set a new group sticker set for a supergroup.
     * The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Use the field can_set_sticker_set optionally returned in getChat requests to check if
     * the bot can use this method. Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param string $stickerSetName Yes
     * @return bool
     */
    public function setChatStickerSet($chatId, string $stickerSetName): bool
    {
        $response = $this->apiAdapter->call('setChatStickerSet', [
            'chat_id' => $chatId,
            'sticker_set_name' => $stickerSetName,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to delete a group sticker set from a supergroup.
     * The bot must be an administrator in the chat for this to work and must have the appropriate admin rights.
     * Use the field can_set_sticker_set optionally returned in getChat requests to check
     * if the bot can use this method. Returns True on success.
     *
     * @param int|string $chatId Yes
     * @return bool
     */
    public function deleteChatStickerSet($chatId): bool
    {
        $response = $this->apiAdapter->call('deleteChatStickerSet', [
            'chat_id' => $chatId,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to send answers to callback queries sent from inline keyboards.
     * The answer will be displayed to the user as a notification at the top of the chat screen or as an alert.
     * On success, True is returned.
     *
     * @param string $callbackQueryId Yes
     * @param string|null $text Optional
     * @param bool|null $showAlert Optional
     * @param string|null $url Optional
     * @param int|null $cacheTime Optional
     *
     * @return bool
     */
    public function answerCallbackQuery(
        string $callbackQueryId,
        ?string $text = null,
        ?bool $showAlert = null,
        ?string $url = null,
        ?int $cacheTime = null
    ): bool {
        $response = $this->apiAdapter->call('answerCallbackQuery', [
            'callback_query_id' => $callbackQueryId,
            'text' => $text,
            'show_alert' => $showAlert,
            'url' => $url,
            'cache_time' => $cacheTime,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to edit text and game messages.
     * On success, if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
     *
     * @param string $text Yes
     * @param int|string|null $chatId Optional
     * @param int|null $messageId Optional
     * @param string|null $inlineMessageId Optional
     * @param string|null $parseMode Optional
     * @param bool|null $disableWebPagePreview Optional
     * @param \Sumrak\TelegramBot\Entity\InlineKeyboardMarkup|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message|bool
     */
    public function editMessageText(
        string $text,
        $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?string $parseMode = null,
        ?bool $disableWebPagePreview = null,
        ?\Sumrak\TelegramBot\Entity\InlineKeyboardMarkup $replyMarkup = null
    ) {
        $response = $this->apiAdapter->call('editMessageText', [
            'text' => $text,
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'inline_message_id' => $inlineMessageId,
            'parse_mode' => $parseMode,
            'disable_web_page_preview' => $disableWebPagePreview,
            'reply_markup' => $replyMarkup,
        ]);

        if ($response === 'true') {
            return true;
        }

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to edit captions of messages. On success,
     * if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chatId Optional
     * @param int|null $messageId Optional
     * @param string|null $inlineMessageId Optional
     * @param string|null $caption Optional
     * @param string|null $parseMode Optional
     * @param \Sumrak\TelegramBot\Entity\InlineKeyboardMarkup|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message|bool
     */
    public function editMessageCaption(
        $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?\Sumrak\TelegramBot\Entity\InlineKeyboardMarkup $replyMarkup = null
    ) {
        $response = $this->apiAdapter->call('editMessageCaption', [
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'inline_message_id' => $inlineMessageId,
            'caption' => $caption,
            'parse_mode' => $parseMode,
            'reply_markup' => $replyMarkup,
        ]);

        if ($response === 'true') {
            return true;
        }

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to edit animation, audio, document, photo, or video messages.
     * If a message is a part of a message album, then it can be edited only to a photo or a video.
     * Otherwise, message type can be changed arbitrarily. When inline message is edited, new file can't be uploaded.
     * Use previously uploaded file via its file_id or specify a URL. On success, if the edited message was sent
     * by the bot, the edited Message is returned, otherwise True is returned.
     *
     * @param InputMediaInterface $media Yes
     * @param int|string|null $chatId Optional
     * @param int|null $messageId Optional
     * @param string|null $inlineMessageId Optional
     * @param \Sumrak\TelegramBot\Entity\InlineKeyboardMarkup|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message|bool
     */
    public function editMessageMedia(
        InputMediaInterface $media,
        $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?\Sumrak\TelegramBot\Entity\InlineKeyboardMarkup $replyMarkup = null
    ) {
        $response = $this->apiAdapter->call('editMessageMedia', [
            'media' => $media,
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'inline_message_id' => $inlineMessageId,
            'reply_markup' => $replyMarkup,
        ]);

        if ($response === 'true') {
            return true;
        }

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to edit only the reply markup of messages.
     * On success, if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chatId Optional
     * @param int|null $messageId Optional
     * @param string|null $inlineMessageId Optional
     * @param \Sumrak\TelegramBot\Entity\InlineKeyboardMarkup|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Message|bool
     */
    public function editMessageReplyMarkup(
        $chatId = null,
        ?int $messageId = null,
        ?string $inlineMessageId = null,
        ?\Sumrak\TelegramBot\Entity\InlineKeyboardMarkup $replyMarkup = null
    ) {
        $response = $this->apiAdapter->call('editMessageReplyMarkup', [
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'inline_message_id' => $inlineMessageId,
            'reply_markup' => $replyMarkup,
        ]);



        if ($response === 'true') {
            return true;
        }

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Message::class,
            $response
        );
    }

    /**
     * Use this method to stop a poll which was sent by the bot.
     * On success, the stopped Poll with the final results is returned.
     *
     * @param int|string $chatId Yes
     * @param int $messageId Yes
     * @param \Sumrak\TelegramBot\Entity\InlineKeyboardMarkup|null $replyMarkup Optional
     *
     * @return \Sumrak\TelegramBot\Entity\Poll
     */
    public function stopPoll(
        $chatId,
        int $messageId,
        ?\Sumrak\TelegramBot\Entity\InlineKeyboardMarkup $replyMarkup = null
    ): \Sumrak\TelegramBot\Entity\Poll {
        $response = $this->apiAdapter->call('stopPoll', [
            'chat_id' => $chatId,
            'message_id' => $messageId,
            'reply_markup' => $replyMarkup,
        ]);

        return $this->serializer->deserialize(
            \Sumrak\TelegramBot\Entity\Poll::class,
            $response
        );
    }

    /**
     * Use this method to delete a message, including service messages, with the following limitations:
     * - A message can only be deleted if it was sent less than 48 hours ago.
     * - Bots can delete outgoing messages in private chats, groups, and supergroups.
     * - Bots can delete incoming messages in private chats.
     * - Bots granted can_post_messages permissions can delete outgoing messages in channels.
     * - If the bot is an administrator of a group, it can delete any message there.
     * - If the bot has can_delete_messages permission in a supergroup or a channel, it can delete any message there.
     * Returns True on success.
     *
     * @param int|string $chatId Yes
     * @param int $messageId Yes
     *
     * @return bool
     */
    public function deleteMessage($chatId, int $messageId)
    {
        $response = $this->apiAdapter->call('deleteMessage', [
            'chat_id' => $chatId,
            'message_id' => $messageId,
        ]);

        return $this->serializer->deserialize(
            'bool',
            $response
        );
    }

    /**
     * Use this method to specify a url and receive incoming updates via an outgoing webhook.
     * Whenever there is an update for the bot, we will send an HTTPS POST request to the specified url,
     * containing a JSON-serialized Update. In case of an unsuccessful request, we will give up after a
     * reasonable amount of attempts. Returns True on success.
     *
     * If you'd like to make sure that the Webhook request comes from Telegram, we recommend using a secret path
     * in the URL, e.g. https://www.example.com/<token>. Since nobody else knows your bot‘s token, you can be
     * pretty sure it’s us.
     * @param string $url
     * @param InputFile|null $certificate
     * @param int|null $maxConnections
     * @param array|null $allowedUpdates
     *
     * @return string
     */
    public function setWebhook(
        string $url,
        ?InputFile $certificate = null,
        ?int $maxConnections = null,
        ?array $allowedUpdates = null
    ): string {
        return $this->apiAdapter->call('setWebhook', [
            'url' => $url,
            'certificate' => $certificate,
            'max_connections' => $maxConnections,
            'allowed_updates' => $allowedUpdates,
        ]);
    }

    /**
     * For any other things
     * @return \Sumrak\TelegramBot\ApiAdapterInterface
     */
    public function getAdapter(): \Sumrak\TelegramBot\ApiAdapterInterface
    {
        return $this->apiAdapter;
    }
}
