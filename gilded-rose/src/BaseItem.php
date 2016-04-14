<?php

namespace GildedRose;

class BaseItem
{
    protected $item;

    public function __construct($item)
    {
        $this->item = $item;
    }

    public function update() {
        $this->updateQuality();
        $this->decreaseSellIn();
    }

    protected function updateQuality()
    {
        if ($this->item->quality > 0) {
            $this->decreaseQuality();
            if ($this->item->sell_in <= 0) {
                $this->decreaseQuality();
            }
        }
    }

    protected function decreaseQuality()
    {
        if ($this->item->quality > 0) {
            $this->item->quality = $this->item->quality - 1;
        }
    }

    protected function increaseQuality()
    {
        if ($this->item->quality < 50) {
            $this->item->quality = $this->item->quality + 1;
        }
    }

    protected function decreaseSellIn()
    {
        $this->item->sell_in = $this->item->sell_in - 1;
    }
}