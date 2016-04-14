<?php

namespace GildedRose;


class BackStagePassItem extends BaseItem
{
    /**
     * BackStagePassItem constructor.
     * @param $item Item
     */
    public function __construct($item)
    {
        parent::__construct($item);
    }

    public function updateQuality()
    {
        $this->increaseQuality();
        $this->increaseQualityWhenSellInIsLowerThan(11);
        $this->increaseQualityWhenSellInIsLowerThan(6);
        $this->setQualityToZeroWhenSellInExpires();
    }

    private function increaseQualityWhenSellInIsLowerThan($sellInDays)
    {
        if ($this->item->sell_in < $sellInDays) {
            $this->increaseQuality();
        }
    }

    private function setQualityToZeroWhenSellInExpires()
    {
        if ($this->item->sell_in <= 0) {
            $this->item->quality = 0;
        }
    }


}