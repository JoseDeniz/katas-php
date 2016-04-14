<?php

namespace GildedRose;


class SulfurasItem extends BaseItem
{

    /**
     * SulfurasItem constructor.
     * @param $item Item
     */
    public function __construct($item)
    {
        parent::__construct($item);
    }

    public function updateQuality()
    {
        return;
    }

    protected function decreaseSellIn()
    {
        return;
    }


}