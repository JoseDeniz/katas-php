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

    private function decreaseQuality()
    {
        $this->quality = $this->quality - 1;
    }
}