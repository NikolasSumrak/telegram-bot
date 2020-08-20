<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class Contact
 * This object represents a phone contact.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class Contact implements EntityInterface
{
    /**
     * Contact's phone number
     *
     * @var string
     */
    private $phoneNumber;

    /**
     * Contact's first name
     *
     * @var string
     */
    private $firstName;

    /**
     * Optional. Contact's last name
     *
     * @var string|null
     */
    private $lastName;

    /**
     * Optional. Contact's user identifier in Telegram
     *
     * @var int|null
     */
    private $userId;

    /**
     * Optional. Additional data about the contact in the form of a vCard
     *
     * @var string|null
     */
    private $vcard;

    /**
     * Contact's phone number
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Contact's phone number
     *
     * @param string $phoneNumber
     *
     * @return void
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Contact's first name
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Contact's first name
     *
     * @param string $firstName
     *
     * @return void
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Optional. Contact's last name
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Optional. Contact's last name
     *
     * @param string|null $lastName
     *
     * @return void
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Optional. Contact's user identifier in Telegram
     *
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * Optional. Contact's user identifier in Telegram
     *
     * @param int|null $userId
     *
     * @return void
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * Optional. Additional data about the contact in the form of a vCard
     *
     * @return string|null
     */
    public function getVcard(): ?string
    {
        return $this->vcard;
    }

    /**
     * Optional. Additional data about the contact in the form of a vCard
     *
     * @param string|null $vcard
     *
     * @return void
     */
    public function setVcard(?string $vcard): void
    {
        $this->vcard = $vcard;
    }
}
