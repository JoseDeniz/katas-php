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
     * @param $item BaseItem
     */
    private function updateQualityFor($item)
    {
        $item->updateQuality();
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
