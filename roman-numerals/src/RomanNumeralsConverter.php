<?php

namespace RomanNumerals;

class RomanNumeralsConverter
{

    /**
     * @param int $decimalNumber
     * @return bool
     */
    public static function convertDecimalToRoman($decimalNumber)
    {
        if ($number == 2) return "II";
        if ($number == 3) return "III";
        return "I";
    }
}
