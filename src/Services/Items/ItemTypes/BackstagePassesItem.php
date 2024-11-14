<?php

namespace App\Services\Items\ItemTypes;

use App\Item;
use App\Services\Items\AbstractItem;

class BackstagePassesItem extends AbstractItem
{

    public function updateQualityAfterSellin(): void
    {
        $this->item->quality = Item::MIN_QUALITY;
    }

    public function updateQualityBeforeSellin(): void
    {
        if($this->item->sell_in < 10 && $this->item->sell_in > 4){
            $this->item->quality += 2;
        }elseif($this->item->sell_in < 5){
            $this->item->quality += 3;
        }else{
            $this->item->quality += 1;
        }
    }
}