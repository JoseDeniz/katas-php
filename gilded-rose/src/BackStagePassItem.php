<?php
/**
 * Created by PhpStorm.
 * User: JoseDeniz
 * Date: 14/04/16
 * Time: 18:24
 */

namespace GildedRose;


class BackStagePassItem extends BaseItem
{

    /**
     * BackStagePassItem constructor.
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
        if ($this->sell_in < 11) {
            $this->increaseQuality();
        }
        if ($this->sell_in < 6) {
            $this->increaseQuality();
        }
        if($this->sell_in <= 0) {
            $this->quality = 0;
        }
    }


}