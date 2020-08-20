<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class PollAnswer
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class PollAnswer implements EntityInterface
{
    /**
     * Unique poll identifier
     *
     * @var string
     */
    private $pollId;

    /**
     * The user, who changed the answer to the poll
     *
     * @var User
     */
    private $user;

    /**
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     *
     * @var int[]
     */
    private $optionIds;

    /**
     * Unique poll identifier
     *
     * @return string
     */
    public function getPollId(): string
    {
        return $this->pollId;
    }

    /**
     * Unique poll identifier
     *
     * @param string $pollId
     *
     * @return void
     */
    public function setPollId(string $pollId): void
    {
        $this->pollId = $pollId;
    }

    /**
     * The user, who changed the answer to the poll
     *
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * The user, who changed the answer to the poll
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
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     *
     * @return int[]
     */
    public function getOptionIds(): array
    {
        return $this->optionIds;
    }

    /**
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     *
     * @param int[] $optionIds
     *
     * @return void
     */
    public function setOptionIds(array $optionIds): void
    {
        $this->optionIds = $optionIds;
    }
}
