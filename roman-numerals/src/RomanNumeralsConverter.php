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
        $romanNumber = "";
        for ($i = 0; $i < $decimalNumber; $i++)
        {
            $romanNumber .= "I";
        }
        return $romanNumber;
    }
}
