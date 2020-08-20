<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineKeyboardMarkup
 * Note: This will only work in Telegram versions released after 9 April, 2016. Older clients will display unsupported
 * message.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InlineKeyboardMarkup implements ReplyMarkupInterface
{
    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     *
     * @var InlineKeyboardButton[][]
     */
    private $inlineKeyboard;

    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     *
     * @return InlineKeyboardButton[][]
     */
    public function getInlineKeyboard(): array
    {
        return $this->inlineKeyboard;
    }

    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects
     *
     * @param InlineKeyboardButton[][] $inlineKeyboard
     *
     * @return void
     */
    public function setInlineKeyboard(array $inlineKeyboard): void
    {
        $this->inlineKeyboard = $inlineKeyboard;
    }
}
