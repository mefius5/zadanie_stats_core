<?php

namespace App\Services\Items;

use App\Item;

abstract class AbstractItem
{
    public function __construct(protected Item $item) {}

    final public function setProperties(): void
    {
        $this->updateSellin();
        $this->updateQuality();
        $this->setFinalQuality();
    }

    protected function updateSellin(): void
    {
        $this->item->sell_in -= 1;
    }

    protected function updateQuality(): void
    {
        if($this->item->sell_in < 0){
            $this->updateQualityAfterSellin();
        }else{
            $this->updateQualityBeforeSellin();
        }

    }

    protected function setFinalQuality(): void
    {
        if($this->item->quality > 50)
            $this->item->quality = Item::MAX_QUALITY;
        if($this->item->quality < 0)
            $this->item->quality = Item::MIN_QUALITY;
    }

    abstract protected function updateQualityAfterSellin(): void;
    abstract protected function updateQualityBeforeSellin(): void;
}