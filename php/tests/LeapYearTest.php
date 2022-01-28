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

    private LeapYear $leapYear;

    protected function setUp(): void
    {
        $this->leapYear = new LeapYear();
    }

    public function test_not_multiple_of_4_is_not_leap_year(): void
    {
        $this->isNotLeapYear(1997);
    }

    public function test_multiple_of_4_are_leap_year(): void
    {
        $this->isLeapYear(1996);
    }

    public function test_multiple_of_100_are_not_leap_year(): void
    {
        $this->isNotLeapYear(1800);
    }

    public function test_multiple_of_400_are_leap_year(): void
    {
        $this->isLeapYear(1600);
    }


    private function isNotLeapYear(int $number): void
    {
        self::assertEquals(false, $this->leapYear->isLeapYear($number));
    }

    private function isLeapYear(int $number): void
    {
        self::assertEquals(true, $this->leapYear->isLeapYear($number));
    }
}
