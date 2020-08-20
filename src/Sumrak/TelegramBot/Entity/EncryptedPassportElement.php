<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class EncryptedPassportElement
 * Contains information about documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class EncryptedPassportElement implements EntityInterface
{
    /**
     * Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”,
     * “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”,
     * “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     *
     * @var string
     */
    private $type;

    /**
     * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for
     * “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and
     * “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @var string|null
     */
    private $data;

    /**
     * Optional. User's verified phone number, available only for “phone_number” type
     *
     * @var string|null
     */
    private $phoneNumber;

    /**
     * Optional. User's verified email address, available only for “email” type
     *
     * @var string|null
     */
    private $email;

    /**
     * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @var PassportFile[]|null
     */
    private $files;

    /**
     * Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”,
     * “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified
     * using the accompanying EncryptedCredentials.
     *
     * @var PassportFile|null
     */
    private $frontSide;

    /**
     * Optional. Encrypted file with the reverse side of the document, provided by the user. Available for
     * “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying
     * EncryptedCredentials.
     *
     * @var PassportFile|null
     */
    private $reverseSide;

    /**
     * Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for
     * “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted
     * and verified using the accompanying EncryptedCredentials.
     *
     * @var PassportFile|null
     */
    private $selfie;

    /**
     * Optional. Array of encrypted files with translated versions of documents provided by the user. Available if
     * requested for “passport”, “driver_license”, “identity_card”, “internal_passport”,
     * “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and
     * “temporary_registration” types. Files can be decrypted and verified using the accompanying
     * EncryptedCredentials.
     *
     * @var PassportFile[]|null
     */
    private $translation;

    /**
     * Base64-encoded element hash for using in PassportElementErrorUnspecified
     *
     * @var string
     */
    private $hash;

    /**
     * Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”,
     * “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”,
     * “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”,
     * “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”,
     * “passport_registration”, “temporary_registration”, “phone_number”, “email”.
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
     * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for
     * “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and
     * “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for
     * “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and
     * “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @param string|null $data
     *
     * @return void
     */
    public function setData(?string $data): void
    {
        $this->data = $data;
    }

    /**
     * Optional. User's verified phone number, available only for “phone_number” type
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Optional. User's verified phone number, available only for “phone_number” type
     *
     * @param string|null $phoneNumber
     *
     * @return void
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Optional. User's verified email address, available only for “email” type
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Optional. User's verified email address, available only for “email” type
     *
     * @param string|null $email
     *
     * @return void
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @return PassportFile[]|null
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    /**
     * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @param PassportFile[]|null $files
     *
     * @return void
     */
    public function setFiles(?array $files): void
    {
        $this->files = $files;
    }

    /**
     * Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”,
     * “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified
     * using the accompanying EncryptedCredentials.
     *
     * @return PassportFile|null
     */
    public function getFrontSide(): ?PassportFile
    {
        return $this->frontSide;
    }

    /**
     * Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”,
     * “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified
     * using the accompanying EncryptedCredentials.
     *
     * @param PassportFile|null $frontSide
     *
     * @return void
     */
    public function setFrontSide(?PassportFile $frontSide): void
    {
        $this->frontSide = $frontSide;
    }

    /**
     * Optional. Encrypted file with the reverse side of the document, provided by the user. Available for
     * “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying
     * EncryptedCredentials.
     *
     * @return PassportFile|null
     */
    public function getReverseSide(): ?PassportFile
    {
        return $this->reverseSide;
    }

    /**
     * Optional. Encrypted file with the reverse side of the document, provided by the user. Available for
     * “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying
     * EncryptedCredentials.
     *
     * @param PassportFile|null $reverseSide
     *
     * @return void
     */
    public function setReverseSide(?PassportFile $reverseSide): void
    {
        $this->reverseSide = $reverseSide;
    }

    /**
     * Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for
     * “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted
     * and verified using the accompanying EncryptedCredentials.
     *
     * @return PassportFile|null
     */
    public function getSelfie(): ?PassportFile
    {
        return $this->selfie;
    }

    /**
     * Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for
     * “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted
     * and verified using the accompanying EncryptedCredentials.
     *
     * @param PassportFile|null $selfie
     *
     * @return void
     */
    public function setSelfie(?PassportFile $selfie): void
    {
        $this->selfie = $selfie;
    }

    /**
     * Optional. Array of encrypted files with translated versions of documents provided by the user. Available if
     * requested for “passport”, “driver_license”, “identity_card”, “internal_passport”,
     * “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and
     * “temporary_registration” types. Files can be decrypted and verified using the accompanying
     * EncryptedCredentials.
     *
     * @return PassportFile[]|null
     */
    public function getTranslation(): ?array
    {
        return $this->translation;
    }

    /**
     * Optional. Array of encrypted files with translated versions of documents provided by the user. Available if
     * requested for “passport”, “driver_license”, “identity_card”, “internal_passport”,
     * “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and
     * “temporary_registration” types. Files can be decrypted and verified using the accompanying
     * EncryptedCredentials.
     *
     * @param PassportFile[]|null $translation
     *
     * @return void
     */
    public function setTranslation(?array $translation): void
    {
        $this->translation = $translation;
    }

    /**
     * Base64-encoded element hash for using in PassportElementErrorUnspecified
     *
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * Base64-encoded element hash for using in PassportElementErrorUnspecified
     *
     * @param string $hash
     *
     * @return void
     */
    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }
}
