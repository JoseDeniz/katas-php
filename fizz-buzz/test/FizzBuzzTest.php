<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function should_return_a_sequence_of_100_elements()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertCount(100, $fizzBuzz->generateFizzBuzzSequence());
    }

    /** @test */
    public function should_be_numbers_those_who_are_not_divisible_by_three_or_five()
    {
        $fizzBuzz = new FizzBuzz();
        $sequence = $fizzBuzz->generateFizzBuzzSequence();

        $testNumber1 = 1;
        $this->assertEquals($testNumber1, $sequence[$testNumber1 - 1]);
        $testNumber2 = 2;
        $this->assertEquals($testNumber2, $sequence[$testNumber2 - 1]);
        $testNumber44 = 42;
        $this->assertEquals($testNumber44, $sequence[$testNumber44 - 1]);
    }

}
