<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

interface InputMediaInterface extends EntityInterface
{
    public const TYPE_PHOTO = 'photo';
    public const TYPE_VIDEO = 'video';
    public const TYPE_ANIMATION = 'animation';
    public const TYPE_AUDIO = 'audio';
    public const TYPE_DOCUMENT = 'document';

    public function getType(): string;

    public function setType(string $type): void;

    public function getMedia(): string;

    public function setMedia(string $media): void;

    public function getCaption(): ?string;

    public function setCaption(?string $caption): void;

    public function getParseMode(): ?string;

    public function setParseMode(?string $parseMode): void;
}
