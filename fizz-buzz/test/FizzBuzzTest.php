<?php

namespace FizzBuzz\Test;

use FizzBuzz\FizzBuzzGenerator;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_1_given_number_1()
    {

        $fizzBuzz = new FizzBuzzGenerator();

        $this->assertEquals('1', $fizzBuzz->generateFizzBuzzSequenceUntil(1));
    }
}
