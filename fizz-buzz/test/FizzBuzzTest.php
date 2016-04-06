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
        $this->assertIsSameNumber(98, $sequence);
    }

    /** @test */
    public function should_be_fizz_those_numbers_who_are_divisible_by_three()
    {
        $fizzBuzz = new FizzBuzz();
        $sequence = $fizzBuzz->generateFizzBuzzSequence();

        $this->assertIsFizz(3, $sequence);
        $this->assertIsFizz(6, $sequence);
    }

    /** @test */
    public function should_be_buzz_those_numbers_who_are_divisible_by_five()
    {
        $fizzBuzz = new FizzBuzz();
        $sequence = $fizzBuzz->generateFizzBuzzSequence();

        $this->assertIsBuzz(5, $sequence);
        $this->assertIsBuzz(10, $sequence);
    }

    /** @test */
    public function should_be_fizzbuzz_those_numbers_who_are_divisible_by_three_and_five()
    {
        $fizzBuzz = new FizzBuzz();
        $sequence = $fizzBuzz->generateFizzBuzzSequence();

        $this->assertIsFizzBuzz(15, $sequence);
        $this->assertIsFizzBuzz(30, $sequence);
    }

    /**
     * @param $number
     * @param $sequence
     */
    private function assertIsSameNumber($number, $sequence)
    {
        $this->assertEquals($number, $sequence[$number - 1]);
    }

    /**
     * @param $number
     * @param $sequence
     */
    protected function assertIsFizz($number, $sequence)
    {
        $this->assertEquals('Fizz', $sequence[$number - 1]);
    }

    /**
     * @param $number
     * @param $sequence
     */
    protected function assertIsBuzz($number, $sequence)
    {
        $this->assertEquals('Buzz', $sequence[$number - 1]);
    }

    /**
     * @param $number
     * @param $sequence
     */
    protected function assertIsFizzBuzz($number, $sequence)
    {
        $this->assertEquals('FizzBuzz', $sequence[$number - 1]);
    }

}
