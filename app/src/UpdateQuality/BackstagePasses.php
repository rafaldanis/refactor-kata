<?php

namespace App\UpdateQuality;

use App\UpdateQuality\Interfaces\InterfaceUpdateQuality;
use App\UpdateQuality\Abstracts\AbstractUpdateQuality;

class BackstagePasses extends AbstractUpdateQuality implements InterfaceUpdateQuality
{
    /**
     *
     */
    public function calc(): void
    {
        $addedValue = 1;

        if ($this->sellIn < 6)
            $addedValue = 3;
        else if ($this->sellIn < 11)
            $addedValue = 2;

        $this->quality = $this->quality + $addedValue;
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        $quality = $this->quality > 50 ? 50 : $this->quality;
        $quality = $this->sellIn < 1 ? 0 : $quality;

        return $quality;
    }

    /**
     * @return int
     */
    public function getSellIn(): int
    {
        return --$this->sellIn;
    }
}