<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzzGenerator;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_1_parsed_to_string()
    {
        $this->assertEquals("1", FizzBuzzGenerator::generateFizzBuzzSequenceUpTo(1));
    }

    /** @test */
    public function should_return_the_sequence_up_to_the_given_number_parsed_to_string()
    {
        $this->assertEquals("1\n2", FizzBuzzGenerator::generateFizzBuzzSequenceUpTo(2));
    }
}
