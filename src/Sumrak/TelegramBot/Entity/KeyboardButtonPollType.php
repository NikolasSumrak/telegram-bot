<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class KeyboardButtonPollType
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is
 * pressed.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class KeyboardButtonPollType implements EntityInterface
{
    /**
     * Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is
     * passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is
     * passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode. If regular is
     * passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
     *
     * @param string|null $type
     *
     * @return void
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
}
