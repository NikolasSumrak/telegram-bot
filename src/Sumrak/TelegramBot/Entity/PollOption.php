<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class PollOption
 * This object contains information about one answer option in a poll.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class PollOption implements EntityInterface
{
    /**
     * Option text, 1-100 characters
     *
     * @var string
     */
    private $text;

    /**
     * Number of users that voted for this option
     *
     * @var int
     */
    private $voterCount;

    /**
     * Option text, 1-100 characters
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Option text, 1-100 characters
     *
     * @param string $text
     *
     * @return void
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * Number of users that voted for this option
     *
     * @return int
     */
    public function getVoterCount(): int
    {
        return $this->voterCount;
    }

    /**
     * Number of users that voted for this option
     *
     * @param int $voterCount
     *
     * @return void
     */
    public function setVoterCount(int $voterCount): void
    {
        $this->voterCount = $voterCount;
    }
}
