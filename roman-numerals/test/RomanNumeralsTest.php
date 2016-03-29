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
        $this->assertEquals("IV", RomanNumeralsConverter::convertDecimalToRoman(4));
        $this->assertEquals("V", RomanNumeralsConverter::convertDecimalToRoman(5));
        $this->assertEquals("VIII", RomanNumeralsConverter::convertDecimalToRoman(8));
        $this->assertEquals("IX", RomanNumeralsConverter::convertDecimalToRoman(9));
        $this->assertEquals("X", RomanNumeralsConverter::convertDecimalToRoman(10));
        $this->assertEquals("XVII", RomanNumeralsConverter::convertDecimalToRoman(17));
        $this->assertEquals("XX", RomanNumeralsConverter::convertDecimalToRoman(20));
        $this->assertEquals("XL", RomanNumeralsConverter::convertDecimalToRoman(40));
        $this->assertEquals("L", RomanNumeralsConverter::convertDecimalToRoman(50));
        $this->assertEquals("XC", RomanNumeralsConverter::convertDecimalToRoman(90));
        $this->assertEquals("C", RomanNumeralsConverter::convertDecimalToRoman(100));
        $this->assertEquals("D", RomanNumeralsConverter::convertDecimalToRoman(500));
        $this->assertEquals("M", RomanNumeralsConverter::convertDecimalToRoman(1000));
    }
}
