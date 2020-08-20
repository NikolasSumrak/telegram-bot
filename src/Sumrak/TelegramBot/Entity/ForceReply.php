<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class ForceReply
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the
 * user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create
 * user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class ForceReply implements ReplyMarkupInterface
{
    /**
     * Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
     *
     * @var bool
     */
    private $forceReply;

    /**
     * Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are
     * @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id),
     * sender of the original message.
     *
     * @var bool|null
     */
    private $selective;

    /**
     * Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
     *
     * @return bool
     */
    public function getForceReply(): bool
    {
        return $this->forceReply;
    }

    /**
     * Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
     *
     * @param bool $forceReply
     *
     * @return void
     */
    public function setForceReply(bool $forceReply): void
    {
        $this->forceReply = $forceReply;
    }

    /**
     * Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are
     * @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id),
     * sender of the original message.
     *
     * @return bool|null
     */
    public function getSelective(): ?bool
    {
        return $this->selective;
    }

    /**
     * Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are
     * @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id),
     * sender of the original message.
     *
     * @param bool|null $selective
     *
     * @return void
     */
    public function setSelective(?bool $selective): void
    {
        $this->selective = $selective;
    }
}
