<?php

namespace FizzBuzz;

class FizzBuzz
{
    const _EMPTY = "";

    const FROM_ONE = 1;
    const TO_ONE_HUNDRED = 100;

    public function generateFizzBuzzSequence()
    {
        $sequence = range(self::FROM_ONE, self::TO_ONE_HUNDRED);
        return array_map(function($number) {
            return $this->parseNumber($number);
        }, $sequence);
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
        return $number % 3 == 0 ? 'Fizz' : self::_EMPTY;
    }

    private function parseIsMultipleOfFive($number)
    {
        return $number % 5 == 0 ? 'Buzz' : self::_EMPTY;
    }
}
