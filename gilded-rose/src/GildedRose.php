<?php


namespace GildedRose;

class GildedRose
{
    private $items;

    function __construct($items)
    {
        $this->items = $this->factoryItems($items);
    }

    function update_quality()
    {
        /** @var BaseItem $item */
        foreach ($this->items as $item) {
            $item->update();
        }
    }

    private function factoryItems($items)
    {
        return array_map(function ($item) {
            return ItemFactory::create($item);
        }, $items);
    }

}
