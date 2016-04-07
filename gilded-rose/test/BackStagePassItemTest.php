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
        $items = [new Item('Backstage passes to a TAFKAL80ETC concert', 12, 20)];
        $gildedRose = $this->gildedRoseFor($items);
        $gildedRose->update_quality();
        $this->assertEquals(21, $items[0]->quality);
    }

    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_greater_than_five_and_lower_than_ten_by_two()
    {
        $items = [new Item('Backstage passes to a TAFKAL80ETC concert', 8, 20)];
        $gildedRose = $this->gildedRoseFor($items);
        $gildedRose->update_quality();
        $this->assertEquals(22, $items[0]->quality);
    }

    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_lower_than_five_and_greater_than_zero_by_three()
    {
        $items = [new Item('Backstage passes to a TAFKAL80ETC concert', 5, 20)];
        $gildedRose = $this->gildedRoseFor($items);
        $gildedRose->update_quality();
        $this->assertEquals(23, $items[0]->quality);
    }

    /**
     * @return GildedRose
     */
    private function gildedRoseFor($items)
    {
        return new GildedRose($items);
    }
}
