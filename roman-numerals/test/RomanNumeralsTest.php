<?php

namespace RomanNumerals\Test;

use RomanNumerals\RomanNumeralsConverter;

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase
{



    /** @test */
    public function should_convert_decimal_number_to_roman_number()
    {
        $this->assertRomanNumber("IV", 4);
        $this->assertRomanNumber("V", 5);
        $this->assertRomanNumber("VIII", 8);
        $this->assertRomanNumber("IX", 9);
        $this->assertRomanNumber("X", 10);
        $this->assertRomanNumber("XVII", 17);
        $this->assertRomanNumber("XX", 20);
        $this->assertRomanNumber("XL", 40);
        $this->assertRomanNumber("L", 50);
        $this->assertRomanNumber("XC", 90);
        $this->assertRomanNumber("C", 100);
        $this->assertRomanNumber("CD", 400);
        $this->assertRomanNumber("D", 500);
        $this->assertRomanNumber("CM", 900);
        $this->assertRomanNumber("M", 1000);

        $this->assertRomanNumber("MCCXXXIV", 1234);
        $this->assertRomanNumber("MMXVI", 2016);
        $this->assertRomanNumber("MMMMCCXXXIV", 4234);
    }

    /**
     * @param $expectedRoman
     * @param $decimal
     */
    public function assertRomanNumber($expectedRoman, $decimal)
    {
        $this->assertEquals($expectedRoman, RomanNumeralsConverter::convertDecimalToRoman($decimal),  "$decimal expected to be $expectedRoman");
    }

    /**
     * @dataProvider numbersToTest
     * @test
     */
    public function test($expectedRoman, $decimal)
    {
        $this->assertRomanNumber($expectedRoman, $decimal);
    }

    public function numbersToTest()
    {
        return [
            ['I', 1],
            ['II', 2],
            ['III', 3],
            ["IV", 4],
            ['V', 5],
            ['VIII', 8],
            ['IX', 9],
            ['X', 10],
            ['XVII', 17],
            ['XX', 20],
            ['XL', 40],
            ['L', 50],
            ['XC', 90],
            ['C', 100],
            ['CD', 400],
            ['D', 500],
            ['CM', 900],
            ['M', 1000],
            ['MCCXXXIV', 1234],
            ['MMXVI', 2016],
            ['MMMMCCXXXIV', 4234]
        ];
    }
}
