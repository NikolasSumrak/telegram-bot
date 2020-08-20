<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class BotCommand
 * This object represents a bot command.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class BotCommand implements EntityInterface
{
    /**
     * Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     *
     * @var string
     */
    private $command;

    /**
     * Description of the command, 3-256 characters.
     *
     * @var string
     */
    private $description;

    /**
     * Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     *
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     *
     * @param string $command
     *
     * @return void
     */
    public function setCommand(string $command): void
    {
        $this->command = $command;
    }

    /**
     * Description of the command, 3-256 characters.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Description of the command, 3-256 characters.
     *
     * @param string $description
     *
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
