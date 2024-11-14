<?php

namespace App\Services\Items\ItemTypes;

use App\Services\Items\AbstractItem;

class SulfurasItem extends AbstractItem
{
    const MAX_QUALITY = 80;

    public function updateSellin(): void
    {
        //nothing changes
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
        $this->item->quality = self::MAX_QUALITY;
    }
}