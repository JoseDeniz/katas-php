<?php

namespace FizzBuzz;

class FizzBuzz
{
    const _EMPTY = "";

    public function generateFizzBuzzSequence()
    {
        return range(1, 100);
    }

    /**
     * @param int $limit
     * @return string
     */
    public function generateFizzBuzzSequenceUpTo($limit)
    {
        $sequence = self::_EMPTY;
        for ($i = 1; $i <= $limit; $i++)
            $sequence .= self::parseNumber($i)."\n";
        return trim($sequence);
    }

    private function parseNumber($number)
    {
        $parsedNumber = self::parseIsMultipleOfThree($number).self::parseIsMultipleOfFive($number);
        return $parsedNumber === self::_EMPTY ? $number : $parsedNumber;
    }

    private function parseIsMultipleOfThree($number)
    {
        return $number % 3 == 0 ? "Fizz" : self::_EMPTY;
    }

    private function parseIsMultipleOfFive($number)
    {
        return $number % 5 == 0 ? "Buzz" : self::_EMPTY;
    }
}
