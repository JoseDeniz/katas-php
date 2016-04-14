<?php

namespace GildedRose;


class AgedBrieItem extends BaseItem
{
    /**
     * AgedBrieItem constructor.
     * @param $item Item
     */
    public function __construct($item)
    {
        parent::__construct($item);
    }

    public function updateQuality()
    {
        $this->increaseQuality();
        $this->increaseQualityWhenSellInDateExpires();
    }

    protected function increaseQualityWhenSellInDateExpires()
    {
        if ($this->getSellIn() <= 0) {
            $this->increaseQuality();
        }
    }

}