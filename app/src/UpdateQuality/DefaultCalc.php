<?php

namespace App\UpdateQuality;

use App\UpdateQuality\Interfaces\InterfaceUpdateQuality;
use App\UpdateQuality\Abstracts\AbstractUpdateQuality;

class DefaultCalc extends AbstractUpdateQuality implements InterfaceUpdateQuality
{

    public function calc(): void
    {
        $subtractedValue = 1;

        if ($this->sellIn < 1) {
            $subtractedValue = 2;
        }

        $this->quality = $this->quality - $subtractedValue;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function getSellIn(): int
    {
        return --$this->sellIn;
    }
}