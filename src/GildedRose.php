<?php

namespace App;

use App\Services\Items\ItemTypeCreator;

final class GildedRose
{
    public function updateQuality(Item $item): void
    {
        $itemType = ItemTypeCreator::getItemType($item);
        $itemType->updateItemProperties();
    }

}