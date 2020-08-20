<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class Dice
 * This object represents an animated emoji that displays a random value.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class Dice implements EntityInterface
{
    /**
     * Emoji on which the dice throw animation is based
     *
     * @var string
     */
    private $emoji;

    /**
     * Value of the dice, 1-6 for “” and “” base emoji, 1-5 for “” base emoji
     *
     * @var int
     */
    private $value;

    /**
     * Emoji on which the dice throw animation is based
     *
     * @return string
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * Emoji on which the dice throw animation is based
     *
     * @param string $emoji
     *
     * @return void
     */
    public function setEmoji(string $emoji): void
    {
        $this->emoji = $emoji;
    }

    /**
     * Value of the dice, 1-6 for “” and “” base emoji, 1-5 for “” base emoji
     *
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * Value of the dice, 1-6 for “” and “” base emoji, 1-5 for “” base emoji
     *
     * @param int $value
     *
     * @return void
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}
