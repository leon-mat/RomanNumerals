<?php
/**
 * User: matthieul
 * Date: 13/10/16
 * Time: 16:23
 */
namespace RomanNumerical;

class Converter
{
    private $numberToRoman = [
        'I' => 1,
        'IV' => 4,
        'V' => 5,
        'IX' => 9,
        'X' => 10,
        'XL' => 40,
        'L' => 50,
        'XC' => 90,
        'C' => 100,
        'CD' => 400,
        'D' => 500,
        'CM' => 900,
        'M' => 1000
    ];

    /**
     * Converter constructor.
     */
    public function __construct()
    {
        $this->numberToRoman = array_reverse($this->numberToRoman);
    }

    /**
     * @param int $number
     * @param int $index
     * @param string $resultFinal
     * @return string
     */
    private function recursive($number, $index, $resultFinal)
    {
        if ($number == 0) {
            return $resultFinal;
        }

        $letter = array_keys($this->numberToRoman)[$index];
        $value = array_values($this->numberToRoman)[$index];

        $testLetter = $number / $value;
        if ($testLetter < 1) {
            return $this->recursive($number, $index+1, $resultFinal);
        } else {
            return $this->recursive($number - $value, 0, $resultFinal . $letter);
        }
    }

    /**
     * @param int $number
     * @return string
     */
    public function convert($number) {
        return $this->recursive($number, 0, '');
    }
}
