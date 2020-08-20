<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class StickerSet
 * This object represents a sticker set.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class StickerSet implements EntityInterface
{
    /**
     * Sticker set name
     *
     * @var string
     */
    private $name;

    /**
     * Sticker set title
     *
     * @var string
     */
    private $title;

    /**
     * True, if the sticker set contains animated stickers
     *
     * @var bool
     */
    private $isAnimated;

    /**
     * True, if the sticker set contains masks
     *
     * @var bool
     */
    private $containsMasks;

    /**
     * List of all set stickers
     *
     * @var Sticker[]
     */
    private $stickers;

    /**
     * Optional. Sticker set thumbnail in the .WEBP or .TGS format
     *
     * @var PhotoSize|null
     */
    private $thumb;

    /**
     * Sticker set name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sticker set name
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Sticker set title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sticker set title
     *
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * True, if the sticker set contains animated stickers
     *
     * @return bool
     */
    public function getIsAnimated(): bool
    {
        return $this->isAnimated;
    }

    /**
     * True, if the sticker set contains animated stickers
     *
     * @param bool $isAnimated
     *
     * @return void
     */
    public function setIsAnimated(bool $isAnimated): void
    {
        $this->isAnimated = $isAnimated;
    }

    /**
     * True, if the sticker set contains masks
     *
     * @return bool
     */
    public function getContainsMasks(): bool
    {
        return $this->containsMasks;
    }

    /**
     * True, if the sticker set contains masks
     *
     * @param bool $containsMasks
     *
     * @return void
     */
    public function setContainsMasks(bool $containsMasks): void
    {
        $this->containsMasks = $containsMasks;
    }

    /**
     * List of all set stickers
     *
     * @return Sticker[]
     */
    public function getStickers(): array
    {
        return $this->stickers;
    }

    /**
     * List of all set stickers
     *
     * @param Sticker[] $stickers
     *
     * @return void
     */
    public function setStickers(array $stickers): void
    {
        $this->stickers = $stickers;
    }

    /**
     * Optional. Sticker set thumbnail in the .WEBP or .TGS format
     *
     * @return PhotoSize|null
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    /**
     * Optional. Sticker set thumbnail in the .WEBP or .TGS format
     *
     * @param PhotoSize|null $thumb
     *
     * @return void
     */
    public function setThumb(?PhotoSize $thumb): void
    {
        $this->thumb = $thumb;
    }
}
