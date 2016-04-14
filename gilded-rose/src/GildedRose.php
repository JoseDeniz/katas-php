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
            $baseItem->update();
        }
    }

}
