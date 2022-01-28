<?php declare(strict_types=1);

namespace Kata;

class LeapYear
{
    // 1800 **NO** es un año bisiesto (divisible entre 4, adicionalmente es divisible entre 100, pero no entre 400)
    public function isLeapYear(int $number): bool
    {
        if ($number % 4 === 0) {
            return $number % 100 !== 0;
        }

        return false;
    }
}
