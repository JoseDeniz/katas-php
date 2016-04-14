<?php

namespace GildedRose;


class ItemFactory
{

    /** @param $item Item */
    public static function create($item)
    {
        return new BaseItem($item->name, $item->sell_in, $item->quality);
    }
    
}