<?php declare(strict_types=1);

namespace Kata;

use JetBrains\PhpStorm\Pure;

final class LeapYear
{
    #[Pure]
    public function isLeapYear(int $year): bool
    {
        if ($this->isDivisibleBy100ButNotBy400($year)) {
            return false;
        }

        return $year % 4 === 0;
    }

    private function isDivisibleBy100ButNotBy400(int $year): bool
    {
        return $year % 100 === 0 && $year % 400 !== 0;
    }
}
