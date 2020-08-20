<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class PassportData
 * Contains information about Telegram Passport data shared with the bot by the user.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class PassportData implements EntityInterface
{
    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     *
     * @var EncryptedPassportElement[]
     */
    private $data;

    /**
     * Encrypted credentials required to decrypt the data
     *
     * @var EncryptedCredentials
     */
    private $credentials;

    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     *
     * @return EncryptedPassportElement[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     *
     * @param EncryptedPassportElement[] $data
     *
     * @return void
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * Encrypted credentials required to decrypt the data
     *
     * @return EncryptedCredentials
     */
    public function getCredentials(): EncryptedCredentials
    {
        return $this->credentials;
    }

    /**
     * Encrypted credentials required to decrypt the data
     *
     * @param EncryptedCredentials $credentials
     *
     * @return void
     */
    public function setCredentials(EncryptedCredentials $credentials): void
    {
        $this->credentials = $credentials;
    }
}
