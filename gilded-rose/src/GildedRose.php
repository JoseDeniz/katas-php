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
        /** @var Item $item */
        foreach ($this->items as $item) {
            $baseItem = ItemFactory::create($item);
            $this->updateQualityFor($baseItem);
            $this->decrementSellInFor($baseItem);
            $item->sell_in = $baseItem->sell_in;
            $item->quality = $baseItem->quality;
        }
    }

    /**
     * @param $item Item
     */
    private function updateQualityFor($item)
    {
        if ($this->isBaseItem($item) || $this->isSulfuras($item)) {
            $item->updateQuality();
        } else {
            $this->increaseQualityOfAgedBrieAndBackstagePass($item);
        }
    }

    /**
     * @param $item Item
     */
    private function increaseQualityOfAgedBrieAndBackstagePass($item)
    {
        if ($item->quality < 50) {
            if ($item->name == 'Aged Brie') {
                $this->increaseQualityOfAgedBrie($item);
            }

            if ($item->name == 'Backstage passes to a TAFKAL80ETC concert') {
                $this->increaseQualityOfBackstage($item);
            }
        }
    }

    /**
     * @param $item Item
     */
    private function increaseQualityOfBackstage($item)
    {
        $this->increaseQualityFor($item);
        if ($item->sell_in < 11) {
            $this->increaseQualityFor($item);
        }
        if ($item->sell_in < 6) {
            $this->increaseQualityFor($item);
        }
        if($item->sell_in <= 0) {
            $item->quality = 0;
        }

    }

    /**
     * @param $item Item
     */
    private function increaseQualityFor($item)
    {
        $item->quality++;
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

    /**
     * @param $item
     */
    private function increaseQualityOfAgedBrie($item)
    {
        $this->increaseQualityFor($item);
        if ($item->sell_in <= 0) {
            $this->increaseQualityFor($item);
        }
    }

    /**
     * @param $item
     * @return bool
     */
    private function isBaseItem($item)
    {
        return !$this->isSulfuras($item) && $item->name != 'Aged Brie' && $item->name != 'Backstage passes to a TAFKAL80ETC concert';
    }
}
