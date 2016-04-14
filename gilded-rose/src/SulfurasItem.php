<?php
/**
 * Created by PhpStorm.
 * User: JoseDeniz
 * Date: 14/04/16
 * Time: 17:58
 */

namespace GildedRose;


class SulfurasItem extends BaseItem
{

    /**
     * SulfurasItem constructor.
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
        return;
    }


}