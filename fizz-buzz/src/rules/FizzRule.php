<?php

namespace rules;


use FizzBuzz\Rule;

class FizzRule implements Rule
{
    private $fizzNumber;
    private $fizzValue;

    public function __construct()
    {
        $this->fizzNumber = 3;
        $this->fizzValue = 'Fizz';
    }
    
    /**
     * @param $number
     * @return boolean
     */
    public function apply($number)
    {
        return $number % $this->fizzNumber == 0;
    }

    /**
     * @return string value
     */
    public function value()
    {
        return $this->fizzValue;
    }
}