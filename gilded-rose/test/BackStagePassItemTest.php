<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class BackStageItemTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_greater_than_ten_by_one()
    {
        $item = new Item('Backstage passes to a TAFKAL80ETC concert', 12, 20);
        $this->updateQualityFor($item);
        $this->assertEquals(21, $item->quality);
    }

    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_greater_than_five_and_lower_than_ten_by_two()
    {
        $item = new Item('Backstage passes to a TAFKAL80ETC concert', 8, 20);
        $this->updateQualityFor($item);
        $this->assertEquals(22, $item->quality);
    }

    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_lower_than_five_and_greater_than_zero_by_three()
    {
        $item = new Item('Backstage passes to a TAFKAL80ETC concert', 5, 20);
        $this->updateQualityFor($item);
        $this->assertEquals(23, $item->quality);
    }

    /** @test */
    public function
    backstage_pass_quality_is_zero_when_sellIn_expires()
    {
        $item = new Item('Backstage passes to a TAFKAL80ETC concert', 0, 20);
        $this->updateQualityFor($item);
        $this->assertEquals(0, $item->quality);
    }

    private function updateQualityFor($item)
    {
        $gildedRose = new GildedRose([$item]);
        $gildedRose->update_quality();
    }
}
