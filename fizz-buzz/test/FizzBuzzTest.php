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

        $this->assertIsSameNumber(1, $sequence);
        $this->assertIsSameNumber(2, $sequence);
        $this->assertIsSameNumber(42, $sequence);
    }

    /**
     * @param $number
     * @param $sequence
     */
    private function assertIsSameNumber($number, $sequence)
    {
        $this->assertEquals($number, $sequence[$number - 1]);
    }

}
