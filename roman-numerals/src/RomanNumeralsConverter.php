<?php

namespace RomanNumerals;

class RomanNumeralsConverter
{
    private static $decimalToRoman = [1000 => "M",
                                      900 => "CM",
                                      500 => "D",
                                      400 => "CD",
                                      100 => "C",
                                      90 => "XC",
                                      50 => "L",
                                      40 => "XL",
                                      10 => "X",
                                      9 => "IX",
                                      5 => "V",
                                      4 => "IV",
                                      1 => "I"];

    /**
     * @param int $decimalNumber
     * @return string
     */
    public static function convertDecimalToRoman($decimalNumber)
    {
        $romanNumber = "";
        foreach (self::$decimalToRoman as $decimal => $roman) {
            while ($decimalNumber >= $decimal) {
                $romanNumber .= $roman;
                $decimalNumber -= $decimal;
            }
        }
        return $romanNumber;
    }
}
