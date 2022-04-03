<?php

namespace App\UpdateQuality;

use App\UpdateQuality\Interfaces\InterfaceUpdateQuality;
use App\UpdateQuality\Abstracts\AbstractUpdateQuality;

class Sulfuras extends AbstractUpdateQuality implements InterfaceUpdateQuality
{

    /**
     *
     */
    public function calc(): void
    {
        $this->quality = 80;
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        return $this->quality;
    }

    /**
     * @return int
     */
    public function getSellIn(): int
    {
        return $this->sellIn;
    }
}