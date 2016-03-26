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
            if ($i % 5 == 0) $sequence = $sequence."\nBuzz";
            else if ($i % 3 == 0) $sequence = $sequence."\nFizz";
            else $sequence = $sequence."\n".$i;
        }
        return trim($sequence);
    }
}
