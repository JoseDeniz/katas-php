<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class AgedBrieItemTest extends \PHPUnit_Framework_TestCase
{
    /** @var  GildedRose */
    private $gildedRose;
    /** @var  Item[] */
    private $items;

    /** @before */
    public function agedBrieInitialize()
    {
        $this->items = [new Item('Aged Brie', 2, 0)];
        $this->gildedRose = new GildedRose($this->items);
    }

    /** @test */
    public function aged_brie_increase_its_quality_when_time_passes()
    {
        $this->gildedRose->update_quality();
        $this->assertEquals(1, $this->items[0]->quality);
    }
}
