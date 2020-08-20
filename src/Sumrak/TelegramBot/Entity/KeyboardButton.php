<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class KeyboardButton
 * Note: request_contact and request_location options will only work in Telegram versions released after 9 April, 2016.
 * Older clients will display unsupported message.Note: request_poll option will only work in Telegram versions released
 * after 23 January, 2020. Older clients will display unsupported message.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class KeyboardButton implements EntityInterface
{
    /**
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is
     * pressed
     *
     * @var string
     */
    private $text;

    /**
     * Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in
     * private chats only
     *
     * @var bool|null
     */
    private $requestContact;

    /**
     * Optional. If True, the user's current location will be sent when the button is pressed. Available in private
     * chats only
     *
     * @var bool|null
     */
    private $requestLocation;

    /**
     * Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is
     * pressed. Available in private chats only
     *
     * @var KeyboardButtonPollType|null
     */
    private $requestPoll;

    /**
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is
     * pressed
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is
     * pressed
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
     * Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in
     * private chats only
     *
     * @return bool|null
     */
    public function getRequestContact(): ?bool
    {
        return $this->requestContact;
    }

    /**
     * Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in
     * private chats only
     *
     * @param bool|null $requestContact
     *
     * @return void
     */
    public function setRequestContact(?bool $requestContact): void
    {
        $this->requestContact = $requestContact;
    }

    /**
     * Optional. If True, the user's current location will be sent when the button is pressed. Available in private
     * chats only
     *
     * @return bool|null
     */
    public function getRequestLocation(): ?bool
    {
        return $this->requestLocation;
    }

    /**
     * Optional. If True, the user's current location will be sent when the button is pressed. Available in private
     * chats only
     *
     * @param bool|null $requestLocation
     *
     * @return void
     */
    public function setRequestLocation(?bool $requestLocation): void
    {
        $this->requestLocation = $requestLocation;
    }

    /**
     * Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is
     * pressed. Available in private chats only
     *
     * @return KeyboardButtonPollType|null
     */
    public function getRequestPoll(): ?KeyboardButtonPollType
    {
        return $this->requestPoll;
    }

    /**
     * Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is
     * pressed. Available in private chats only
     *
     * @param KeyboardButtonPollType|null $requestPoll
     *
     * @return void
     */
    public function setRequestPoll(?KeyboardButtonPollType $requestPoll): void
    {
        $this->requestPoll = $requestPoll;
    }
}
