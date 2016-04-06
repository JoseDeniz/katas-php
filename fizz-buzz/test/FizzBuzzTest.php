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
        $this->assertEquals($number, $this->get($number)->from($sequence));
    }

    /**
     * @param $number
     * @param $sequence
     */
    protected function assertIsFizz($number, $sequence)
    {
        $this->assertEquals('Fizz', $this->get($number)->from($sequence));
    }

    /**
     * @param $number
     * @param $sequence
     */
    protected function assertIsBuzz($number, $sequence)
    {
        $this->assertEquals('Buzz', $this->get($number)->from($sequence));
    }

    /**
     * @param $number
     * @param $sequence
     */
    protected function assertIsFizzBuzz($number, $sequence)
    {
        $this->assertEquals('FizzBuzz', $this->get($number)->from($sequence));
    }

    private function get($number)
    {
        return new Finder($number);
    }
}

class Finder
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function from($sequence)
    {
        return $sequence[$this->number - 1];
    }
}
