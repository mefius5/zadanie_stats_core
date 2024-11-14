<?php

namespace App\Services\Items\ItemTypes;

use App\Services\Items\AbstractItem;

class DefaultItem extends AbstractItem
{
    public function updateQualityAfterSellin(): void
    {
        $this->item->quality -= 2;
    }

    public function updateQualityBeforeSellin(): void
    {
        $this->item->quality -= 1;
    }
}