<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class GildedRoseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function sulfuras_hand_of_ragnaros_doesnt_vary_his_quality_when_time_passes()
    {
        $items = [new Item('Sulfuras, Hand of Ragnaros', 0, 80)];
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();

        $this->assertEquals($items[0]->quality, 80);
    }

    /** @test */
    public function sulfuras_hand_of_ragnaros_doesnt_vary_sell_date_when_update_quality()
    {
        $items = [new Item('Sulfuras, Hand of Ragnaros', 0, 80)];
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();

        $this->assertEquals($items[0]->sell_in, 0);
    }

}
