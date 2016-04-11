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

        $number1 = 1;
        $this->assertIsSameNumber($number1, $this->get($number1)->from($sequence));
        $number2 = 2;
        $this->assertIsSameNumber($number2, $this->get($number2)->from($sequence));
        $number98 = 98;
        $this->assertIsSameNumber($number98, $this->get($number98)->from($sequence));
    }

    /** @test */
    public function should_be_fizz_those_numbers_who_are_divisible_by_three()
    {
        $fizzBuzz = new FizzBuzz();
        $sequence = $fizzBuzz->generateFizzBuzzSequence();

        $this->assertIsFizz($this->get(3)->from($sequence));
        $this->assertIsFizz($this->get(6)->from($sequence));
    }

    /** @test */
    public function should_be_buzz_those_numbers_who_are_divisible_by_five()
    {
        $fizzBuzz = new FizzBuzz();
        $sequence = $fizzBuzz->generateFizzBuzzSequence();

        $this->assertIsBuzz($this->get(5)->from($sequence));
        $this->assertIsBuzz($this->get(10)->from($sequence));
    }

    /** @test */
    public function should_be_fizzbuzz_those_numbers_who_are_divisible_by_three_and_five()
    {
        $fizzBuzz = new FizzBuzz();
        $sequence = $fizzBuzz->generateFizzBuzzSequence();

        $this->assertIsFizzBuzz($this->get(15)->from($sequence));
        $this->assertIsFizzBuzz($this->get(30)->from($sequence));
    }

    /**
     * @param $expected
     * @param $actual
     */
    private function assertIsSameNumber($expected, $actual)
    {
        $this->assertEquals($expected, $actual);
    }

    /**
     * @param $number
     */
    protected function assertIsFizz($number)
    {
        $this->assertEquals('Fizz', $number);
    }

    /**
     * @param $number
     */
    protected function assertIsBuzz($number)
    {
        $this->assertEquals('Buzz', $number);
    }

    /**
     * @param $number
     */
    protected function assertIsFizzBuzz($number)
    {
        $this->assertEquals('FizzBuzz', $number);
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
