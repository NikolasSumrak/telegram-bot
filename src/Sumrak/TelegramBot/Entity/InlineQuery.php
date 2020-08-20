<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineQuery
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some
 * default or trending results.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InlineQuery implements EntityInterface
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
     * Optional. Sender location, only for bots that request user location
     *
     * @var Location|null
     */
    private $location;

    /**
     * Text of the query (up to 256 characters)
     *
     * @var string
     */
    private $query;

    /**
     * Offset of the results to be returned, can be controlled by the bot
     *
     * @var string
     */
    private $offset;

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
     * Optional. Sender location, only for bots that request user location
     *
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Optional. Sender location, only for bots that request user location
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
     * Text of the query (up to 256 characters)
     *
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Text of the query (up to 256 characters)
     *
     * @param string $query
     *
     * @return void
     */
    public function setQuery(string $query): void
    {
        $this->query = $query;
    }

    /**
     * Offset of the results to be returned, can be controlled by the bot
     *
     * @return string
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Offset of the results to be returned, can be controlled by the bot
     *
     * @param string $offset
     *
     * @return void
     */
    public function setOffset(string $offset): void
    {
        $this->offset = $offset;
    }
}
