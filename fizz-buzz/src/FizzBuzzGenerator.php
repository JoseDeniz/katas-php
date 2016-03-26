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
        $sequence = "1";
        if ($limit > 1) {
            $sequence = $sequence."\n".$limit;
        }
        return $sequence;
    }
}
