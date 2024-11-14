<?php

namespace App\Services\Items\ItemTypes;

use App\Services\Items\AbstractItem;

class SulfurasItem extends AbstractItem
{

    public function updateSellin(): void
    {
        $this->item->sell_in = $this->item->sell_in;
    }

    public function updateQualityAfterSellin(): void
    {
        //nothing changes
    }

    public function updateQualityBeforeSellin(): void
    {
        //nothing changes
    }

    public function setFinalQuality(): void
    {
        $this->item->quality = 80;
    }
}