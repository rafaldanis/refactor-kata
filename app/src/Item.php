<?php

namespace App;

final class Item
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sellIn;

    /**
     * @var int
     */
    public $quality;

    /**
     * @param string $name
     * @param int $sell_in
     * @param int $quality
     */
    public function __construct(string $name, int $sell_in, int $quality)
    {
        $this->name = $name;
        $this->sellIn = $sell_in;
        $this->quality = $quality;
    }
}