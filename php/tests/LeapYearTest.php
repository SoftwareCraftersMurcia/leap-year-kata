<?php declare(strict_types=1);

namespace KataTests;

use Kata\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /*
     * 1997 **NO** es un año bisiesto (no es divisible entre 4)
     * 1996 es un año bisiesto (divisible entre 4)
     * 1800 **NO** es un año bisiesto (divisible entre 4, adicionalmente es divisible entre 100, pero no entre 400)
     * 1600 es un año bisiesto (divisible entre 400)
     */

    public function test_1997_is_not_leap_year(): void
    {
        $leapYear = new LeapYear();

        $result = $leapYear->isLeapYear(1997);

        self::assertEquals(false, $result);
    }

    public function test_1996_is_leap_year(): void
    {
        $leapYear = new LeapYear();

        $result = $leapYear->isLeapYear(1996);

        self::assertEquals(true, $result);
    }

    public function test_1800_is_not_leap_year(): void
    {
        $leapYear = new LeapYear();

        $result = $leapYear->isLeapYear(1800);

        self::assertEquals(false, $result);
    }

    public function test_multiple_of_400_is_leap_year(): void
    {
        $leapYear = new LeapYear();

        $result = $leapYear->isLeapYear(1600);

        self::assertEquals(true, $result);
    }
}
