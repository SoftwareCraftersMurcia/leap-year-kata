<?php declare(strict_types=1);

namespace KataTests;

use Kata\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /** @test */
    public function given_2_is_not_leap_year(): void
    {
        $leapYear = new LeapYear();

        self::assertFalse($leapYear->isLeapYear(2));
    }

    /** @test */
    public function given_4_is_not_leap_year(): void
    {
        $leapYear = new LeapYear();

        self::assertTrue($leapYear->isLeapYear(4));
    }
}
