<?php declare(strict_types=1);

namespace Kata;

class LeapYear
{
    public function isLeapYear(int $year): bool
    {
        return $year % 4 === 0;
    }
}
