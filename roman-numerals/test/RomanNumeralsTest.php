<?php

namespace RomanNumerals\Test;

use RomanNumerals\RomanNumeralsConverter;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_convert_decimal_number_to_roman_number()
    {
        $this->assertEquals("I", RomanNumeralsConverter::convertDecimalToRoman(1));
        $this->assertEquals("II", RomanNumeralsConverter::convertDecimalToRoman(2));
        $this->assertEquals("III", RomanNumeralsConverter::convertDecimalToRoman(3));
        $this->assertEquals("V", RomanNumeralsConverter::convertDecimalToRoman(5));
        $this->assertEquals("VIII", RomanNumeralsConverter::convertDecimalToRoman(8));
        $this->assertEquals("X", RomanNumeralsConverter::convertDecimalToRoman(10));
        $this->assertEquals("XVII", RomanNumeralsConverter::convertDecimalToRoman(17));
        $this->assertEquals("XX", RomanNumeralsConverter::convertDecimalToRoman(20));
        $this->assertEquals("L", RomanNumeralsConverter::convertDecimalToRoman(50));
        $this->assertEquals("C", RomanNumeralsConverter::convertDecimalToRoman(100));
    }
}
