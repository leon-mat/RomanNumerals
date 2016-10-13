<?php
/**
 * User: matthieul
 * Date: 13/10/16
 * Time: 16:23
 */
namespace RomanNumerical;

class Converter
{

    /**
     * Converter constructor.
     */
    public function __construct()
    {
    }

    public function convert($number) {
        if (10 === $number) {
            return 'X';
        }
    }
}
