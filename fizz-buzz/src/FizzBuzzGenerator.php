<?php

namespace FizzBuzz;

class FizzBuzzGenerator
{

    /**
     * @param int $limit
     * @return string
     */
    public static function generateFizzBuzzSequenceUpTo($limit)
    {
        $sequence = "";
        for ($i = 1; $i <= $limit; $i++)
            $sequence = $sequence.self::parseNumber($i)."\n";
        return trim($sequence);
    }

    private static function parseNumber($number)
    {
        $parsedNumber = self::parseIsMultipleOfThree($number).self::parseIsMultipleOfFive($number);
        return $parsedNumber === "" ? $number : $parsedNumber;
    }

    private static function parseIsMultipleOfThree($number)
    {
        if ($number % 3 == 0) return "Fizz";
        return "";
    }

    private static function parseIsMultipleOfFive($number)
    {
        if ($number % 5 == 0) return "Buzz";
        return "";
    }
}
