<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class CallbackQuery
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that
 * originated the query was attached to a message sent by the bot, the field message will be present. If the button was
 * attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of
 * the fields data or game_short_name will be present.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class CallbackQuery implements EntityInterface
{
    /**
     * Unique identifier for this query
     *
     * @var string
     */
    private $id;

    /**
     * Sender
     *
     * @var User
     */
    private $from;

    /**
     * Optional. Message with the callback button that originated the query. Note that message content and message date
     * will not be available if the message is too old
     *
     * @var Message|null
     */
    private $message;

    /**
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     *
     * @var string|null
     */
    private $inlineMessageId;

    /**
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent.
     * Useful for high scores in games.
     *
     * @var string
     */
    private $chatInstance;

    /**
     * Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this
     * field.
     *
     * @var string|null
     */
    private $data;

    /**
     * Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     *
     * @var string|null
     */
    private $gameShortName;

    /**
     * Unique identifier for this query
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique identifier for this query
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
     * Sender
     *
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * Sender
     *
     * @param User $from
     *
     * @return void
     */
    public function setFrom(User $from): void
    {
        $this->from = $from;
    }

    /**
     * Optional. Message with the callback button that originated the query. Note that message content and message date
     * will not be available if the message is too old
     *
     * @return Message|null
     */
    public function getMessage(): ?Message
    {
        return $this->message;
    }

    /**
     * Optional. Message with the callback button that originated the query. Note that message content and message date
     * will not be available if the message is too old
     *
     * @param Message|null $message
     *
     * @return void
     */
    public function setMessage(?Message $message): void
    {
        $this->message = $message;
    }

    /**
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     *
     * @return string|null
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    /**
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     *
     * @param string|null $inlineMessageId
     *
     * @return void
     */
    public function setInlineMessageId(?string $inlineMessageId): void
    {
        $this->inlineMessageId = $inlineMessageId;
    }

    /**
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent.
     * Useful for high scores in games.
     *
     * @return string
     */
    public function getChatInstance(): string
    {
        return $this->chatInstance;
    }

    /**
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent.
     * Useful for high scores in games.
     *
     * @param string $chatInstance
     *
     * @return void
     */
    public function setChatInstance(string $chatInstance): void
    {
        $this->chatInstance = $chatInstance;
    }

    /**
     * Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this
     * field.
     *
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Optional. Data associated with the callback button. Be aware that a bad client can send arbitrary data in this
     * field.
     *
     * @param string|null $data
     *
     * @return void
     */
    public function setData(?string $data): void
    {
        $this->data = $data;
    }

    /**
     * Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     *
     * @return string|null
     */
    public function getGameShortName(): ?string
    {
        return $this->gameShortName;
    }

    /**
     * Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     *
     * @param string|null $gameShortName
     *
     * @return void
     */
    public function setGameShortName(?string $gameShortName): void
    {
        $this->gameShortName = $gameShortName;
    }
}
