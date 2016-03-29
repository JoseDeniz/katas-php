<?php

namespace RomanNumerals;

class RomanNumeralsConverter
{
    private static $decimalToRoman = [10 => "X",
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
        for ($i = 0; $i < $decimalNumber; $i++) {
            $romanNumber .= "I";
        }
        return $romanNumber;
    }
}
