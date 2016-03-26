<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzzGenerator;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{

    /** @test */
    public function should_return_the_sequence_up_to_the_given_number_parsed_to_string()
    {
        $this->assertEquals("1", FizzBuzzGenerator::generateFizzBuzzSequenceUpTo(1));
        $this->assertEquals("1\n2", FizzBuzzGenerator::generateFizzBuzzSequenceUpTo(2));
    }

    /** @test */
    public function should_return_fizz_given_a_number_multiple_of_three()
    {
        $this->assertEquals("1\n2\nFizz", FizzBuzzGenerator::generateFizzBuzzSequenceUpTo(3));
    }

    /** @test */
    public function should_return_buzz_given_a_number_multiple_of_five()
    {
        $this->assertEquals("1\n2\nFizz\n4\nBuzz", FizzBuzzGenerator::generateFizzBuzzSequenceUpTo(5));
    }

    /** @test */
    public function should_return_fizzbuzz_given_a_number_multiple_of_three_and_five()
    {
        $this->assertEquals("1\n2\nFizz\n4\nBuzz\nFizz\n7\n8\nFizz\nBuzz\n11\nFizz\n13\n14\nFizzBuzz", FizzBuzzGenerator::generateFizzBuzzSequenceUpTo(15));
    }
}
