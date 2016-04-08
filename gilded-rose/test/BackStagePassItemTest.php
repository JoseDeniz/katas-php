<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class BackStageItemTest extends \PHPUnit_Framework_TestCase
{
    const BACKSTAGE_PASS = 'Backstage passes to a TAFKAL80ETC concert';

    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_greater_than_ten_by_one()
    {
        $item = new Item(self::BACKSTAGE_PASS, 12, 20);
        $this->updateQualityFor($item);
        $this->assertEquals(21, $item->quality);
    }

    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_greater_than_five_and_lower_than_ten_by_two()
    {
        $item = new Item(self::BACKSTAGE_PASS, 8, 20);
        $this->updateQualityFor($item);
        $this->assertEquals(22, $item->quality);
    }

    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_lower_than_five_and_greater_than_zero_by_three()
    {
        $item = new Item(self::BACKSTAGE_PASS, 5, 20);
        $this->updateQualityFor($item);
        $this->assertEquals(23, $item->quality);
    }

    /** @test */
    public function
    backstage_pass_quality_is_zero_when_sellIn_expires()
    {
        $item = new Item(self::BACKSTAGE_PASS, 0, 20);
        $this->updateQualityFor($item);
        $this->assertEquals(0, $item->quality);
    }

    /** @test */
    public function backstage_never_passes_a_quality_of_fifty()
    {
        $item = new Item(self::BACKSTAGE_PASS, 12, 50);
        $this->updateQualityFor($item);
        $this->assertEquals(50, $item->quality);
    }

    private function updateQualityFor($item)
    {
        $gildedRose = new GildedRose([$item]);
        $gildedRose->update_quality();
    }
}
