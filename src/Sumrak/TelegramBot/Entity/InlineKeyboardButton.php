<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InlineKeyboardButton
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class InlineKeyboardButton implements EntityInterface
{
    /**
     * Label text on the button
     *
     * @var string
     */
    private $text;

    /**
     * Optional. HTTP or tg:// url to be opened when button is pressed
     *
     * @var string|null
     */
    private $url;

    /**
     * Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram
     * Login Widget.
     *
     * @var LoginUrl|null
     */
    private $loginUrl;

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     *
     * @var string|null
     */
    private $callbackData;

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and
     * insert the bot's username and the specified inline query in the input field. Can be empty, in which case just the
     * bot's username will be inserted. Note: This offers an easy way for users to start using your bot in inline mode
     * when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions –
     * in this case the user will be automatically returned to the chat they switched from, skipping the chat selection
     * screen.
     *
     * @var string|null
     */
    private $switchInlineQuery;

    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the
     * current chat's input field. Can be empty, in which case only the bot's username will be inserted. This offers a
     * quick way for the user to open your bot in inline mode in the same chat – good for selecting something from
     * multiple options.
     *
     * @var string|null
     */
    private $switchInlineQueryCurrentChat;

    /**
     * Optional. Description of the game that will be launched when the user presses the button. NOTE: This type of
     * button must always be the first button in the first row.
     *
     * @var CallbackGame|null
     */
    private $callbackGame;

    /**
     * Optional. Specify True, to send a Pay button. NOTE: This type of button must always be the first button in the
     * first row.
     *
     * @var bool|null
     */
    private $pay;

    /**
     * Label text on the button
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Label text on the button
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
     * Optional. HTTP or tg:// url to be opened when button is pressed
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Optional. HTTP or tg:// url to be opened when button is pressed
     *
     * @param string|null $url
     *
     * @return void
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram
     * Login Widget.
     *
     * @return LoginUrl|null
     */
    public function getLoginUrl(): ?LoginUrl
    {
        return $this->loginUrl;
    }

    /**
     * Optional. An HTTP URL used to automatically authorize the user. Can be used as a replacement for the Telegram
     * Login Widget.
     *
     * @param LoginUrl|null $loginUrl
     *
     * @return void
     */
    public function setLoginUrl(?LoginUrl $loginUrl): void
    {
        $this->loginUrl = $loginUrl;
    }

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     *
     * @return string|null
     */
    public function getCallbackData(): ?string
    {
        return $this->callbackData;
    }

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     *
     * @param string|null $callbackData
     *
     * @return void
     */
    public function setCallbackData(?string $callbackData): void
    {
        $this->callbackData = $callbackData;
    }

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and
     * insert the bot's username and the specified inline query in the input field. Can be empty, in which case just the
     * bot's username will be inserted. Note: This offers an easy way for users to start using your bot in inline mode
     * when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions –
     * in this case the user will be automatically returned to the chat they switched from, skipping the chat selection
     * screen.
     *
     * @return string|null
     */
    public function getSwitchInlineQuery(): ?string
    {
        return $this->switchInlineQuery;
    }

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and
     * insert the bot's username and the specified inline query in the input field. Can be empty, in which case just the
     * bot's username will be inserted. Note: This offers an easy way for users to start using your bot in inline mode
     * when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions –
     * in this case the user will be automatically returned to the chat they switched from, skipping the chat selection
     * screen.
     *
     * @param string|null $switchInlineQuery
     *
     * @return void
     */
    public function setSwitchInlineQuery(?string $switchInlineQuery): void
    {
        $this->switchInlineQuery = $switchInlineQuery;
    }

    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the
     * current chat's input field. Can be empty, in which case only the bot's username will be inserted. This offers a
     * quick way for the user to open your bot in inline mode in the same chat – good for selecting something from
     * multiple options.
     *
     * @return string|null
     */
    public function getSwitchInlineQueryCurrentChat(): ?string
    {
        return $this->switchInlineQueryCurrentChat;
    }

    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the
     * current chat's input field. Can be empty, in which case only the bot's username will be inserted. This offers a
     * quick way for the user to open your bot in inline mode in the same chat – good for selecting something from
     * multiple options.
     *
     * @param string|null $switchInlineQueryCurrentChat
     *
     * @return void
     */
    public function setSwitchInlineQueryCurrentChat(?string $switchInlineQueryCurrentChat): void
    {
        $this->switchInlineQueryCurrentChat = $switchInlineQueryCurrentChat;
    }

    /**
     * Optional. Description of the game that will be launched when the user presses the button. NOTE: This type of
     * button must always be the first button in the first row.
     *
     * @return CallbackGame|null
     */
    public function getCallbackGame(): ?CallbackGame
    {
        return $this->callbackGame;
    }

    /**
     * Optional. Description of the game that will be launched when the user presses the button. NOTE: This type of
     * button must always be the first button in the first row.
     *
     * @param CallbackGame|null $callbackGame
     *
     * @return void
     */
    public function setCallbackGame(?CallbackGame $callbackGame): void
    {
        $this->callbackGame = $callbackGame;
    }

    /**
     * Optional. Specify True, to send a Pay button. NOTE: This type of button must always be the first button in the
     * first row.
     *
     * @return bool|null
     */
    public function getPay(): ?bool
    {
        return $this->pay;
    }

    /**
     * Optional. Specify True, to send a Pay button. NOTE: This type of button must always be the first button in the
     * first row.
     *
     * @param bool|null $pay
     *
     * @return void
     */
    public function setPay(?bool $pay): void
    {
        $this->pay = $pay;
    }
}
