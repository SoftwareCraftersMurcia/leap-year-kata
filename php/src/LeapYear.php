<?php declare(strict_types=1);

namespace Kata;

class LeapYear
{
    public function isLeapYear(int $number): bool
    {
        if ($number %4 === 0)
            return true;
        else
            return false;
    }
}
