<?php

namespace App\Services\Items;

use App\Item;
use App\Services\Items\ItemTypes\AgedBrieItem;
use App\Services\Items\ItemTypes\BackstagePassesItem;
use App\Services\Items\ItemTypes\DefaultItem;
use App\Services\Items\ItemTypes\SulfurasItem;

class ItemTypeCreator
{
    public static function getItemType(Item $item): AbstractItem
    {
        return match ($item->name) {
            Item::TYPE_AGED_BRIE => new AgedBrieItem($item),
            Item::TYPE_BACKSTAGE_PASSES => new BackstagePassesItem($item),
            Item::TYPE_SULFURAS => new SulfurasItem($item),
            default => new DefaultItem($item),
        };
    }
}