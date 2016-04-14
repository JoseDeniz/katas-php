<?php

namespace GildedRose;


class ItemFactory
{

    /** @param $item Item */
    public static function create($item)
    {
        if (self::isSulfuras($item)) return new SulfurasItem($item->name, $item->sell_in, $item->quality);
        if (self::isAgedBrie($item)) return new AgedBrieItem($item->name, $item->sell_in, $item->quality);
        return new BaseItem($item->name, $item->sell_in, $item->quality);
    }

    /**
     * @param $item
     * @return bool
     */
    private static function isSulfuras($item)
    {
        return $item->name == 'Sulfuras, Hand of Ragnaros';
    }

    /**
     * @param $item
     * @return bool
     */
    private static function isAgedBrie($item)
    {
        return $item->name == 'Aged Brie';
    }

    /**
     * @param $item
     * @return bool
     */
    private static function isBackstagePass($item)
    {
        return $item->name == 'Backstage passes to a TAFKAL80ETC concert';
    }

}