<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class BaseItemTest extends \PHPUnit_Framework_TestCase
{
    const ANY_ITEM = 'AnyItem';

    /** @test */
    public function
    base_item_quality_decrease_twice_as_fast_when_sellIn_expires()
    {
        $item = new Item(self::ANY_ITEM, 0, 10);
        $this->updateQualityFor($item);
        $this->assertEquals(8, $item->quality);
        $this->updateQualityFor($item);
        $this->assertEquals(6, $item->quality);
    }

    /** @test */
    public function base_item_quality_is_never_a_negative_value()
    {
        $item = new Item(self::ANY_ITEM, 0, 0);
        $this->updateQualityFor($item);
        $this->assertEquals(0, $item->quality);
    }

    private function updateQualityFor($item)
    {
        $gildedRose = new GildedRose([$item]);
        $gildedRose->update_quality();
    }
}
