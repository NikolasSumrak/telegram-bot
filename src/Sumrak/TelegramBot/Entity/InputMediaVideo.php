<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class InputMediaVideo
 * Represents a video to be sent.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class InputMediaVideo implements InputMediaInterface
{
    /**
     * Type of the result, must be video
     *
     * @var string
     */
    private $type;

    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL
     * for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using
     * multipart/form-data under <file_attach_name> name. More info on Sending Files »
     *
     * @var string
     */
    private $media;

    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     * server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height
     * should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused
     * and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was
     * uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
     *
     * @var InputFile|string|null
     */
    private $thumb;

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     *
     * @var string|null
     */
    private $caption;

    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     *
     * @var string|null
     */
    private $parseMode;

    /**
     * Optional. Video width
     *
     * @var int|null
     */
    private $width;

    /**
     * Optional. Video height
     *
     * @var int|null
     */
    private $height;

    /**
     * Optional. Video duration
     *
     * @var int|null
     */
    private $duration;

    /**
     * Optional. Pass True, if the uploaded video is suitable for streaming
     *
     * @var bool|null
     */
    private $supportsStreaming;

    /**
     * Type of the result, must be video
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of the result, must be video
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
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL
     * for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using
     * multipart/form-data under <file_attach_name> name. More info on Sending Files »
     *
     * @return string
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL
     * for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using
     * multipart/form-data under <file_attach_name> name. More info on Sending Files »
     *
     * @param string $media
     *
     * @return void
     */
    public function setMedia(string $media): void
    {
        $this->media = $media;
    }

    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     * server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height
     * should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused
     * and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was
     * uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
     *
     * @return InputFile|string|null
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported
     * server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height
     * should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused
     * and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was
     * uploaded using multipart/form-data under <file_attach_name>. More info on Sending Files »
     *
     * @param InputFile|string|null $thumb
     *
     * @return void
     */
    public function setThumb($thumb): void
    {
        $this->thumb = $thumb;
    }

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     *
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
     *
     * @param string|null $caption
     *
     * @return void
     */
    public function setCaption(?string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     *
     * @return string|null
     */
    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
     *
     * @param string|null $parseMode
     *
     * @return void
     */
    public function setParseMode(?string $parseMode): void
    {
        $this->parseMode = $parseMode;
    }

    /**
     * Optional. Video width
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * Optional. Video width
     *
     * @param int|null $width
     *
     * @return void
     */
    public function setWidth(?int $width): void
    {
        $this->width = $width;
    }

    /**
     * Optional. Video height
     *
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * Optional. Video height
     *
     * @param int|null $height
     *
     * @return void
     */
    public function setHeight(?int $height): void
    {
        $this->height = $height;
    }

    /**
     * Optional. Video duration
     *
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * Optional. Video duration
     *
     * @param int|null $duration
     *
     * @return void
     */
    public function setDuration(?int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * Optional. Pass True, if the uploaded video is suitable for streaming
     *
     * @return bool|null
     */
    public function getSupportsStreaming(): ?bool
    {
        return $this->supportsStreaming;
    }

    /**
     * Optional. Pass True, if the uploaded video is suitable for streaming
     *
     * @param bool|null $supportsStreaming
     *
     * @return void
     */
    public function setSupportsStreaming(?bool $supportsStreaming): void
    {
        $this->supportsStreaming = $supportsStreaming;
    }
}
