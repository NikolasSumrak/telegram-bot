<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

class Update implements EntityInterface
{
    /**
     * The update‘s unique identifier. Update identifiers start from a certain positive number and increase
     * sequentially. This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore
     * repeated updates or to restore the correct update sequence, should they get out of order. If there are no new
     * updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     *
     * @var int
     */
    private $updateId;

    /**
     * New incoming message of any kind — text, photo, sticker, etc.
     *
     * @var Message|null
     */
    private $message;

    /**
     * New version of a message that is known to the bot and was edited
     *
     * @var Message|null
     */
    private $editedMessage;

    /**
     * New incoming channel post of any kind — text, photo, sticker, etc.
     *
     * @var Message|null
     */
    private $channelPost;

    /**
     * New version of a channel post that is known to the bot and was edited
     *
     * @var Message|null
     */
    private $editedChannelPost;

    /**
     * @var InlineQuery|null
     */
    private $inlineQuery;

    /**
     * @var ChosenInlineResult|null
     */
    private $chosenInlineResult;

    /**
     * New incoming callback query
     *
     * @var CallbackQuery|null
     */
    private $callbackQuery;

    /**
     * New incoming shipping query. Only for invoices with flexible price
     *
     * @var ShippingQuery|null
     */
    private $shippingQuery;

    /**
     * New incoming pre-checkout query. Contains full information about checkout
     *
     * @var PreCheckoutQuery|null
     */
    private $preCheckoutQuery;

    /**
     * New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     *
     * @var Poll|null
     */
    private $pool;

    /**
     * A user changed their answer in a non-anonymous poll.
     * Bots receive new votes only in polls that were sent by the bot itself.
     *
     * @var PollAnswer|null
     */
    private $poolAnswer;

    public function getUpdateId(): int
    {
        return $this->updateId;
    }

    public function setUpdateId(int $updateId): void
    {
        $this->updateId = $updateId;
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function setMessage(Message $message): void
    {
        $this->message = $message;
    }

    public function getEditedMessage(): ?Message
    {
        return $this->editedMessage;
    }

    public function setEditedMessage(Message $editedMessage): void
    {
        $this->editedMessage = $editedMessage;
    }

    public function getChannelPost(): ?Message
    {
        return $this->channelPost;
    }

    public function setChannelPost(Message $channelPost): void
    {
        $this->channelPost = $channelPost;
    }

    public function getEditedChannelPost(): ?Message
    {
        return $this->editedChannelPost;
    }

    public function setEditedChannelPost(Message $editedChannelPost): void
    {
        $this->editedChannelPost = $editedChannelPost;
    }

    public function getInlineQuery(): ?InlineQuery
    {
        return $this->inlineQuery;
    }

    public function setInlineQuery(InlineQuery $inlineQuery): void
    {
        $this->inlineQuery = $inlineQuery;
    }

    public function getCallbackQuery(): ?CallbackQuery
    {
        return $this->callbackQuery;
    }

    public function setCallbackQuery(CallbackQuery $callbackQuery)
    {
        $this->callbackQuery = $callbackQuery;
    }

    public function getChosenInlineResult(): ?ChosenInlineResult
    {
        return $this->chosenInlineResult;
    }

    public function setChosenInlineResult(ChosenInlineResult $chosenInlineResult): void
    {
        $this->chosenInlineResult = $chosenInlineResult;
    }

    public function getShippingQuery(): ?ShippingQuery
    {
        return $this->shippingQuery;
    }

    public function setShippingQuery(ShippingQuery $shippingQuery): void
    {
        $this->shippingQuery = $shippingQuery;
    }

    public function getPreCheckoutQuery(): ?PreCheckoutQuery
    {
        return $this->preCheckoutQuery;
    }

    public function setPreCheckoutQuery(PreCheckoutQuery $preCheckoutQuery): void
    {
        $this->preCheckoutQuery = $preCheckoutQuery;
    }

    public function getPool(): ?Poll
    {
        return $this->pool;
    }

    public function setPool(?Poll $pool): void
    {
        $this->pool = $pool;
    }

    public function getPoolAnswer(): ?PollAnswer
    {
        return $this->poolAnswer;
    }

    public function setPoolAnswer(?PollAnswer $poolAnswer): void
    {
        $this->poolAnswer = $poolAnswer;
    }
}
