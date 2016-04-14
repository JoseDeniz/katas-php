<?php

namespace FizzBuzz;


interface Rule
{
    /**
     * @param $number
     * @return mixed
     */
    public function apply($number);
    
    /**
     * @return string value 
     */
    public function value();
}