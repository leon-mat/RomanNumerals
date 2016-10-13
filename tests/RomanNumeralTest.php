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

    public function test_V()
    {
        $converter = new Converter();
        $this->assertEquals($converter->convert(5), 'V');
    }

    public function test_C()
    {
        $converter = new Converter();
        $this->assertEquals($converter->convert(200), 'CC');
    }

    public function test_Rand_X()
    {
        $converter = new Converter();

        $res = $converter->convert(rand(10, 19));
        $hasLetter = in_array('X', str_split($res));
        $this->assertEquals($hasLetter, true);
    }

    public function test_Rand_V_Per_Dix()
    {
        $converter = new Converter();

        foreach (range(0, 9) as $i) {
            $res = $converter->convert($i * 10 + 4);
            $this->stringContains('IV', $res);
        }
    }

    public function test_yolo()
    {
        $converter = new Converter();
        $this->assertEquals($converter->convert(400), 'CD');
        $this->assertEquals($converter->convert(404), 'CDIV');
        $this->assertEquals($converter->convert(349), 'CCCXLIX');
        $this->assertEquals($converter->convert(494), 'CDXCIV');
        $this->assertEquals($converter->convert(48), 'XLVIII');
    }
}
