<?php

namespace FizzBuzz;

class FizzBuzzGenerator
{
    const _EMPTY = "";

    /**
     * @param int $limit
     * @return string
     */
    public static function generateFizzBuzzSequenceUpTo($limit)
    {
        $sequence = self::_EMPTY;
        for ($i = 1; $i <= $limit; $i++)
            $sequence .= self::parseNumber($i)."\n";
        return trim($sequence);
    }

    private static function parseNumber($number)
    {
        $parsedNumber = self::parseIsMultipleOfThree($number).self::parseIsMultipleOfFive($number);
        return $parsedNumber === self::_EMPTY ? $number : $parsedNumber;
    }

    private static function parseIsMultipleOfThree($number)
    {
        return $number % 3 == 0 ? "Fizz" : self::_EMPTY;
    }

    private static function parseIsMultipleOfFive($number)
    {
        return $number % 5 == 0 ? "Buzz" : self::_EMPTY;
    }
}
