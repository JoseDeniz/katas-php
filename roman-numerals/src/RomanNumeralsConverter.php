<?php

namespace RomanNumerals;

class RomanNumeralsConverter
{
    private static $decimalToRoman = [100 => "C",
                                      50 => "L",
                                      10 => "X",
                                      5 => "V",
                                      1 => "I"];

    /**
     * @param int $decimalNumber
     * @return bool
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
