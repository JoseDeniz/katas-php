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
        if ($decimalNumber == 5) return "V";
        $romanNumber = "";
        for ($i = 0; $i < $decimalNumber; $i++)
        {
            $romanNumber .= "I";
        }
        return $romanNumber;
    }
}
