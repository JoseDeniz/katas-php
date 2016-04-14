<?php

namespace GildedRose;

class BaseItem extends Item
{
    public function updateQuality()
    {
        if ($this->quality > 0) {
            $this->decreaseQuality();
            if ($this->sell_in <= 0) {
                $this->decreaseQuality();
            }
        }
    }
    
    protected function decreaseQuality()
    {
        if ($this->quality > 0) {
            $this->quality = $this->quality - 1;
        }
    }

    protected function increaseQuality()
    {
        if ($this->quality < 50) {
            $this->quality = $this->quality + 1;
        }
    }
}