<?php
namespace App\UpdateQuality;

use App\UpdateQuality\Interfaces\InterfaceUpdateQuality;
use App\UpdateQuality\Abstracts\AbstractUpdateQuality;

class AgreBrie extends AbstractUpdateQuality implements InterfaceUpdateQuality
{
    /**
     *
     */
    public function calc(): void
    {
        $addedValue = 1;

        if ($this->sellIn < 1)
            $addedValue = 2;

        $this->quality = $this->quality + $addedValue;
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        return $this->quality > 50 ? 50 : $this->quality;
    }

    /**
     * @return int
     */
    public function getSellIn(): int
    {
        return --$this->sellIn;
    }
}