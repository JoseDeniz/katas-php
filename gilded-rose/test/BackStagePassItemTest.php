<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class BackStageItemTest extends \PHPUnit_Framework_TestCase
{
    /** @var  GildedRose */
    private $gildedRose;
    /** @var  Item[] */
    private $items;

    /** @before */
    public function backStageItemInitialize()
    {
        $this->items = [new Item('Backstage passes to a TAFKAL80ETC concert', 12, 20)];
        $this->gildedRose = new GildedRose($this->items);
    }

    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_greater_than_ten_by_one()
    {
        $this->gildedRose->update_quality();
        $this->assertEquals(21, $this->items[0]->quality);
    }

    /** @test */
    public function
    backstage_pass_increase_its_quality_when_sellIn_is_greater_than_five_and_lower_than_ten_by_two()
    {
        $this->items = [new Item('Backstage passes to a TAFKAL80ETC concert', 8, 20)];
        $this->gildedRose = new GildedRose($this->items);
        $this->gildedRose->update_quality();
        $this->assertEquals(22, $this->items[0]->quality);
    }
}
