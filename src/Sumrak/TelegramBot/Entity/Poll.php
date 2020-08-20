<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class Poll
 * This object contains information about a poll.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class Poll implements EntityInterface
{
    /**
     * Unique poll identifier
     *
     * @var string
     */
    private $id;

    /**
     * Poll question, 1-255 characters
     *
     * @var string
     */
    private $question;

    /**
     * List of poll options
     *
     * @var PollOption[]
     */
    private $options;

    /**
     * Total number of users that voted in the poll
     *
     * @var int
     */
    private $totalVoterCount;

    /**
     * True, if the poll is closed
     *
     * @var bool
     */
    private $isClosed;

    /**
     * True, if the poll is anonymous
     *
     * @var bool
     */
    private $isAnonymous;

    /**
     * Poll type, currently can be “regular” or “quiz”
     *
     * @var string
     */
    private $type;

    /**
     * True, if the poll allows multiple answers
     *
     * @var bool
     */
    private $allowsMultipleAnswers;

    /**
     * Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are
     * closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     *
     * @var int|null
     */
    private $correctOptionId;

    /**
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style
     * poll, 0-200 characters
     *
     * @var string|null
     */
    private $explanation;

    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     *
     * @var MessageEntity[]|null
     */
    private $explanationEntities;

    /**
     * Optional. Amount of time in seconds the poll will be active after creation
     *
     * @var int|null
     */
    private $openPeriod;

    /**
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     *
     * @var int|null
     */
    private $closeDate;

    /**
     * Unique poll identifier
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Unique poll identifier
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
     * Poll question, 1-255 characters
     *
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * Poll question, 1-255 characters
     *
     * @param string $question
     *
     * @return void
     */
    public function setQuestion(string $question): void
    {
        $this->question = $question;
    }

    /**
     * List of poll options
     *
     * @return PollOption[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * List of poll options
     *
     * @param PollOption[] $options
     *
     * @return void
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    /**
     * Total number of users that voted in the poll
     *
     * @return int
     */
    public function getTotalVoterCount(): int
    {
        return $this->totalVoterCount;
    }

    /**
     * Total number of users that voted in the poll
     *
     * @param int $totalVoterCount
     *
     * @return void
     */
    public function setTotalVoterCount(int $totalVoterCount): void
    {
        $this->totalVoterCount = $totalVoterCount;
    }

    /**
     * True, if the poll is closed
     *
     * @return bool
     */
    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * True, if the poll is closed
     *
     * @param bool $isClosed
     *
     * @return void
     */
    public function setIsClosed(bool $isClosed): void
    {
        $this->isClosed = $isClosed;
    }

    /**
     * True, if the poll is anonymous
     *
     * @return bool
     */
    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * True, if the poll is anonymous
     *
     * @param bool $isAnonymous
     *
     * @return void
     */
    public function setIsAnonymous(bool $isAnonymous): void
    {
        $this->isAnonymous = $isAnonymous;
    }

    /**
     * Poll type, currently can be “regular” or “quiz”
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Poll type, currently can be “regular” or “quiz”
     *
     * @param string $type
     *
     * @return void
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * True, if the poll allows multiple answers
     *
     * @return bool
     */
    public function getAllowsMultipleAnswers(): bool
    {
        return $this->allowsMultipleAnswers;
    }

    /**
     * True, if the poll allows multiple answers
     *
     * @param bool $allowsMultipleAnswers
     *
     * @return void
     */
    public function setAllowsMultipleAnswers(bool $allowsMultipleAnswers): void
    {
        $this->allowsMultipleAnswers = $allowsMultipleAnswers;
    }

    /**
     * Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are
     * closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     *
     * @return int|null
     */
    public function getCorrectOptionId(): ?int
    {
        return $this->correctOptionId;
    }

    /**
     * Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are
     * closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
     *
     * @param int|null $correctOptionId
     *
     * @return void
     */
    public function setCorrectOptionId(?int $correctOptionId): void
    {
        $this->correctOptionId = $correctOptionId;
    }

    /**
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style
     * poll, 0-200 characters
     *
     * @return string|null
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style
     * poll, 0-200 characters
     *
     * @param string|null $explanation
     *
     * @return void
     */
    public function setExplanation(?string $explanation): void
    {
        $this->explanation = $explanation;
    }

    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     *
     * @return MessageEntity[]|null
     */
    public function getExplanationEntities(): ?array
    {
        return $this->explanationEntities;
    }

    /**
     * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
     *
     * @param MessageEntity[]|null $explanationEntities
     *
     * @return void
     */
    public function setExplanationEntities(?array $explanationEntities): void
    {
        $this->explanationEntities = $explanationEntities;
    }

    /**
     * Optional. Amount of time in seconds the poll will be active after creation
     *
     * @return int|null
     */
    public function getOpenPeriod(): ?int
    {
        return $this->openPeriod;
    }

    /**
     * Optional. Amount of time in seconds the poll will be active after creation
     *
     * @param int|null $openPeriod
     *
     * @return void
     */
    public function setOpenPeriod(?int $openPeriod): void
    {
        $this->openPeriod = $openPeriod;
    }

    /**
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     *
     * @return int|null
     */
    public function getCloseDate(): ?int
    {
        return $this->closeDate;
    }

    /**
     * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
     *
     * @param int|null $closeDate
     *
     * @return void
     */
    public function setCloseDate(?int $closeDate): void
    {
        $this->closeDate = $closeDate;
    }
}
