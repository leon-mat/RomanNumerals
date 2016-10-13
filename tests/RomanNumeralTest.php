<?php

/**
 * User: matthieul
 * Date: 13/10/16
 * Time: 16:12
 */

use RomanNumerical\Converter;

class RomanNumeralTest extends PHPUnit_Framework_TestCase
{
    public function test_simple_romain_numeral()
    {
        $converter = new Converter();
        $this->assertEquals($converter->convert(10), 'X');
    }
}