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
    public function should_return_fizz_given_a_number_multiple_of_three()
    {
        $this->markTestSkipped();

        $this->assertEquals("1\n2\nFizz", $fizzBuzz->generateFizzBuzzSequenceUpTo(3));
    }

    /** @test */
    public function should_return_buzz_given_a_number_multiple_of_five()
    {
        $this->markTestSkipped();

        $this->assertEquals("1\n2\nFizz\n4\nBuzz", $fizzBuzz->generateFizzBuzzSequenceUpTo(5));
    }

    /** @test */
    public function should_return_fizzbuzz_given_a_number_multiple_of_three_and_five()
    {
        $this->markTestSkipped();

        $this->assertEquals("1\n2\nFizz\n4\nBuzz\nFizz\n7\n8\nFizz\nBuzz\n11\nFizz\n13\n14\nFizzBuzz", $fizzBuzz->generateFizzBuzzSequenceUpTo(15));
    }
}
