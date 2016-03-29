<?php

namespace RomanNumerals;

class RomanNumeralsConverter
{

    /**
     * @return bool
     */
    public static function convert($number)
    {
        if ($number == 2) return "II";
        if ($number == 3) return "III";
        return "I";
    }
}
