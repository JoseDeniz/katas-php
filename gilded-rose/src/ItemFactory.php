<?php

namespace GildedRose;


class ItemFactory
{

    /** 
     * @param $item Item
     * @return BaseItem
     */
    public static function create($item)
    {
        if (self::isSulfuras($item)) return new SulfurasItem($item);
        if (self::isAgedBrie($item)) return new AgedBrieItem($item);
        if (self::isBackstagePass($item)) return new BackStagePassItem($item);
        return new BaseItem($item);
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