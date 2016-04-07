<?php

namespace GildedRose\Test;

use GildedRose\GildedRose;
use GildedRose\Item;

class SulfurasItemTest extends \PHPUnit_Framework_TestCase
{

    private $items;
    /** @var  GildedRose */
    private $gildedRose;

    /** @before */
    public function sulfurasInitialize()
    {
        $this->items = [new Item('Sulfuras, Hand of Ragnaros', 0, 80)];
        $this->gildedRose = new GildedRose($this->items);
    }

    /**
     * @test
     */
    public function sulfuras_hand_of_ragnaros_doesnt_vary_his_quality_when_time_passes()
    {
        $this->gildedRose->update_quality();
        $this->assertEquals($this->items[0]->quality, 80);
    }

    /** @test */
    public function sulfuras_hand_of_ragnaros_doesnt_vary_sell_date_when_update_quality()
    {
        $this->gildedRose->update_quality();

        $this->assertEquals($this->items[0]->sell_in, 0);
    }

}
