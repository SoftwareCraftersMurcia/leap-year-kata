<?php declare(strict_types=1);

namespace Kata;

class LeapYear
{
    public function isLeapYear(int $number): bool
    {
        return ($this->isMultipleOf($number, 4)
            && ($this->isNotMultipleOf($number, 100) || $this->isMultipleOf($number, 400)));
    }

    public function isMultipleOf(int $number, int $multiple): bool
    {
        return $number % $multiple === 0;
    }

    public function isNotMultipleOf(int $number, int $multiple): bool
    {
        return !$this->isMultipleOf($number, $multiple);
    }
}
