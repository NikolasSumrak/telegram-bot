<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class MessageEntity
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @package Sumrak\TelegramBot\Entity
 */
class MessageEntity implements EntityInterface
{
    /**
     * Type of the entity. Can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD),
     * “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org),
     * “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline”
     * (underlined text), “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth
     * block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames)
     *
     * @var string
     */
    private $type;

    /**
     * Offset in UTF-16 code units to the start of the entity
     *
     * @var int
     */
    private $offset;

    /**
     * Length of the entity in UTF-16 code units
     *
     * @var int
     */
    private $length;

    /**
     * Optional. For “text_link” only, url that will be opened after user taps on the text
     *
     * @var string|null
     */
    private $url;

    /**
     * Optional. For “text_mention” only, the mentioned user
     *
     * @var User|null
     */
    private $user;

    /**
     * Optional. For “pre” only, the programming language of the entity text
     *
     * @var string|null
     */
    private $language;

    /**
     * Type of the entity. Can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD),
     * “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org),
     * “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline”
     * (underlined text), “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth
     * block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames)
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the entity. Can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD),
     * “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org),
     * “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline”
     * (underlined text), “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth
     * block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames)
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
     * Offset in UTF-16 code units to the start of the entity
     *
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Offset in UTF-16 code units to the start of the entity
     *
     * @param int $offset
     *
     * @return void
     */
    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * Length of the entity in UTF-16 code units
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Length of the entity in UTF-16 code units
     *
     * @param int $length
     *
     * @return void
     */
    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * Optional. For “text_link” only, url that will be opened after user taps on the text
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Optional. For “text_link” only, url that will be opened after user taps on the text
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
     * Optional. For “text_mention” only, the mentioned user
     *
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * Optional. For “text_mention” only, the mentioned user
     *
     * @param User|null $user
     *
     * @return void
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    /**
     * Optional. For “pre” only, the programming language of the entity text
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Optional. For “pre” only, the programming language of the entity text
     *
     * @param string|null $language
     *
     * @return void
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }
}
