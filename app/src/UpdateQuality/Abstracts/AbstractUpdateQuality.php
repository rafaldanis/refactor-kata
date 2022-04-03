<?php

namespace App\UpdateQuality\Abstracts;

abstract class AbstractUpdateQuality
{
    /**
     * @var int
     */
    protected $quality;
    /**
     * @var int
     */
    protected $sellIn;

    /**
     * @param int $quality
     * @param int $sellIn
     */
    public function __construct(int $quality, int $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }
}