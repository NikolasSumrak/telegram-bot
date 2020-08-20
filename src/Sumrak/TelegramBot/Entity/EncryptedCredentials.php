<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class EncryptedCredentials
 * Contains data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport
 * Documentation for a complete description of the data decryption and authentication processes.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class EncryptedCredentials implements EntityInterface
{
    /**
     * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for
     * EncryptedPassportElement decryption and authentication
     *
     * @var string
     */
    private $data;

    /**
     * Base64-encoded data hash for data authentication
     *
     * @var string
     */
    private $hash;

    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     *
     * @var string
     */
    private $secret;

    /**
     * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for
     * EncryptedPassportElement decryption and authentication
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for
     * EncryptedPassportElement decryption and authentication
     *
     * @param string $data
     *
     * @return void
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }

    /**
     * Base64-encoded data hash for data authentication
     *
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * Base64-encoded data hash for data authentication
     *
     * @param string $hash
     *
     * @return void
     */
    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     *
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     *
     * @param string $secret
     *
     * @return void
     */
    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }
}
