<?php

namespace App;

final class Item
{
    const TYPE_AGED_BRIE = 'Aged Brie';
    const TYPE_SULFURAS = 'Sulfuras, Hand of Ragnaros';
    const TYPE_BACKSTAGE_PASSES = 'Backstage passes to a TAFKAL80ETC concert';

    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;
    const MIN_SELL_IN = 0;

    function __construct(
        public string $name,
        public int $sell_in,
        public int $quality)
    {}

    public function __toString()
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}