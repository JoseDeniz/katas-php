<?php

namespace FizzBuzz;

class FizzBuzz
{
    const _EMPTY = "";
    const FROM_ONE = 1;
    const TO_ONE_HUNDRED = 100;

    public function generateFizzBuzzSequence()
    {
        return array_map($this->parseNumber(), range(self::FROM_ONE, self::TO_ONE_HUNDRED));
    }

    private function parseNumber()
    {
        return function ($number) {
            $parsedNumber = $this->parseIsMultipleOfThree($number).$this->parseIsMultipleOfFive($number);
            return $parsedNumber === self::_EMPTY ? $number : $parsedNumber;
        };
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
