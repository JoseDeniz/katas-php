<?php


namespace GildedRose;

class GildedRose
{
    private $items;

    function __construct($items)
    {
        $this->items = $items;
    }

    function update_quality()
    {
        foreach ($this->items as $item) {
            if ($item->name != 'Aged Brie' and $item->name != 'Backstage passes to a TAFKAL80ETC concert') {
                if ($item->quality > 0) {
                    if (!$this->isSulfuras($item)) {
                        $item->quality = $item->quality - 1;
                    }
                }
            } else {
                if ($item->quality < 50) {
                    $item->quality = $item->quality + 1;
                    if ($item->name == 'Backstage passes to a TAFKAL80ETC concert') {
                        if ($item->sell_in < 11) {
                            $item->quality = $item->quality + 1;
                        }
                        if ($item->sell_in < 6) {
                            $item->quality = $item->quality + 1;
                        }
                    }
                }
            }

            $this->decrementSellInFor($item);

            if ($item->sell_in < 0) {
                if ($item->name != 'Aged Brie') {
                    if ($item->name != 'Backstage passes to a TAFKAL80ETC concert') {
                        if ($item->quality > 0) {
                            if (!$this->isSulfuras($item)) {
                                $item->quality = $item->quality - 1;
                            }
                        }
                    } else {
                        $item->quality = $item->quality - $item->quality;
                    }
                } else {
                    if ($item->quality < 50) {
                        $item->quality = $item->quality + 1;
                    }
                }
            }
        }
    }

    /**
     * @param $item Item
     */
    private function decrementSellInFor($item)
    {
        if (!$this->isSulfuras($item)) {
            $item->sell_in = $item->sell_in - 1;
        }
    }

    /**
     * @param $item Item
     * @return bool
     */
    private function isSulfuras($item)
    {
        return $item->name == 'Sulfuras, Hand of Ragnaros';
    }
}
