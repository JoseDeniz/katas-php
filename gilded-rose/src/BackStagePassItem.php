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
        if ($this->item->sell_in < 11) {
            $this->increaseQuality();
        }
        if ($this->item->sell_in < 6) {
            $this->increaseQuality();
        }
        if($this->item->sell_in <= 0) {
            $this->item->quality = 0;
        }
    }


}