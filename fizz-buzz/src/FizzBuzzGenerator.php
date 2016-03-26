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
        for ($i = 1; $i <= $limit; $i++) {
            $sequence = $sequence.self::parseNumber($i);
        }
        return trim($sequence);
    }

    private static function parseNumber($number)
    {
        if ($number % 3 == 0 && $number % 5 == 0) return "\nFizzBuzz";
        else if ($number % 5 == 0) return "\nBuzz";
        else if ($number % 3 == 0) return "\nFizz";
        return "\n".$number;
    }
}
