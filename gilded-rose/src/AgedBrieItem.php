<?php
/**
 * Created by PhpStorm.
 * User: JoseDeniz
 * Date: 14/04/16
 * Time: 18:15
 */

namespace GildedRose;


class AgedBrieItem extends BaseItem
{

    /**
     * AgedBrieItem constructor.
     * @param $name
     * @param $sell_in
     * @param $quality
     */
    public function __construct($name, $sell_in, $quality)
    {
        parent::__construct($name, $sell_in, $quality);
    }

    public function updateQuality()
    {
        $this->increaseQuality();
        if ($this->sell_in <= 0) {
            $this->increaseQuality();
        }
    }


}