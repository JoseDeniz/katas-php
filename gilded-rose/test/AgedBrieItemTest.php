<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class AgedBrieItemTest extends \PHPUnit_Framework_TestCase
{
    const AGED_BRIE = 'Aged Brie';

    /** @test */
    public function aged_brie_increase_its_quality_when_time_passes()
    {
        $item = new Item(self::AGED_BRIE, 10, 0);
        $this->updateQualityFor($item);
        $this->assertEquals(1, $item->quality);
    }

    /** @test */
    public function aged_brie_never_passes_a_quality_of_fifty()
    {
        $item = new Item(self::AGED_BRIE, 2, 50);
        $this->updateQualityFor($item);
        $this->assertEquals(50, $item->quality);
    }

    private function updateQualityFor($item)
    {
        $gildedRose = new GildedRose([$item]);
        $gildedRose->update_quality();
    }
}
