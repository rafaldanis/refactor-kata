<?php

namespace App;

use App\UpdateQuality\AgreBrie;
use App\UpdateQuality\BackstagePasses;
use App\UpdateQuality\DefaultCalc;
use App\UpdateQuality\Sulfuras;

//vendor/bin/phpunit

final class GildedRose
{

    /**
     * @param Item $item
     */
    public function updateQuality(Item $item): void
    {
        switch ($item->name) {
            case 'Aged Brie':
                $update = new AgreBrie($item->quality, $item->sellIn);
                break;

            case 'Backstage passes to a TAFKAL80ETC concert':
                $update = new BackstagePasses($item->quality, $item->sellIn);
                break;

            case 'Sulfuras, Hand of Ragnaros':
                $update = new Sulfuras($item->quality, $item->sellIn);
                break;

            default:
                $update = new DefaultCalc($item->quality, $item->sellIn);
                break;
        }

        $update->calc();

        $item->quality = $update->getQuality();
        $item->sellIn = $update->getSellIn();
    }
}