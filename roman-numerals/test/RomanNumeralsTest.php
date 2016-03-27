<?php

namespace RomanNumerals\Test;

use RomanNumerals\RomanNumeralsConverter;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_convert_decimal_number_to_roman_number()
    {
        $this->assertEquals("I", RomanNumeralsConverter::convert(1));
    }
}
