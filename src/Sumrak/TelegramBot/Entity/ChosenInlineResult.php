<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class ChosenInlineResult
 * Note: It is necessary to enable inline feedback via @Botfather in order to receive these objects in updates.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class ChosenInlineResult implements EntityInterface
{
    /**
     * The unique identifier for the result that was chosen
     *
     * @var string
     */
    private $resultId;

    /**
     * The user that chose the result
     *
     * @var User
     */
    private $from;

    /**
     * Optional. Sender location, only for bots that require user location
     *
     * @var Location|null
     */
    private $location;

    /**
     * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the
     * message. Will be also received in callback queries and can be used to edit the message.
     *
     * @var string|null
     */
    private $inlineMessageId;

    /**
     * The query that was used to obtain the result
     *
     * @var string
     */
    private $query;

    /**
     * The unique identifier for the result that was chosen
     *
     * @return string
     */
    public function getResultId(): string
    {
        return $this->resultId;
    }

    /**
     * The unique identifier for the result that was chosen
     *
     * @param string $resultId
     *
     * @return void
     */
    public function setResultId(string $resultId): void
    {
        $this->resultId = $resultId;
    }

    /**
     * The user that chose the result
     *
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * The user that chose the result
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
     * Optional. Sender location, only for bots that require user location
     *
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Optional. Sender location, only for bots that require user location
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
     * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the
     * message. Will be also received in callback queries and can be used to edit the message.
     *
     * @return string|null
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    /**
     * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the
     * message. Will be also received in callback queries and can be used to edit the message.
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
     * The query that was used to obtain the result
     *
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * The query that was used to obtain the result
     *
     * @param string $query
     *
     * @return void
     */
    public function setQuery(string $query): void
    {
        $this->query = $query;
    }
}
