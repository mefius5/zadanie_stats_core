<?php

namespace App;

final class Item
{
    public $name;
    public $sell_in;
    public $quality;

    const TYPE_AGED_BRIE = 'Aged Brie';
    const TYPE_SULFURAS = 'Sulfuras, Hand of Ragnaros';
    const TYPE_BACKSTAGE_PASSES = 'Backstage passes to a TAFKAL80ETC concert';

    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;

    function __construct($name, $sell_in, $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}