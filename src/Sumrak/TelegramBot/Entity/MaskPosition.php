<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Entity;

/**
 * Class MaskPosition
 * This object describes the position on faces where a mask should be placed by default.
 *
 * @package Sumrak\TelegramBot\Entity
 * @codeCoverageIgnore
 */
class MaskPosition implements EntityInterface
{
    /**
     * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”,
     * or “chin”.
     *
     * @var string
     */
    private $point;

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing
     * -1.0 will place mask just to the left of the default mask position.
     *
     * @var float
     */
    private $xShift;

    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0
     * will place the mask just below the default mask position.
     *
     * @var float
     */
    private $yShift;

    /**
     * Mask scaling coefficient. For example, 2.0 means double size.
     *
     * @var float
     */
    private $scale;

    /**
     * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”,
     * or “chin”.
     *
     * @return string
     */
    public function getPoint(): string
    {
        return $this->point;
    }

    /**
     * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”,
     * or “chin”.
     *
     * @param string $point
     *
     * @return void
     */
    public function setPoint(string $point): void
    {
        $this->point = $point;
    }

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing
     * -1.0 will place mask just to the left of the default mask position.
     *
     * @return float
     */
    public function getXShift(): float
    {
        return $this->xShift;
    }

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing
     * -1.0 will place mask just to the left of the default mask position.
     *
     * @param float $xShift
     *
     * @return void
     */
    public function setXShift(float $xShift): void
    {
        $this->xShift = $xShift;
    }

    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0
     * will place the mask just below the default mask position.
     *
     * @return float
     */
    public function getYShift(): float
    {
        return $this->yShift;
    }

    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0
     * will place the mask just below the default mask position.
     *
     * @param float $yShift
     *
     * @return void
     */
    public function setYShift(float $yShift): void
    {
        $this->yShift = $yShift;
    }

    /**
     * Mask scaling coefficient. For example, 2.0 means double size.
     *
     * @return float
     */
    public function getScale(): float
    {
        return $this->scale;
    }

    /**
     * Mask scaling coefficient. For example, 2.0 means double size.
     *
     * @param float $scale
     *
     * @return void
     */
    public function setScale(float $scale): void
    {
        $this->scale = $scale;
    }
}
