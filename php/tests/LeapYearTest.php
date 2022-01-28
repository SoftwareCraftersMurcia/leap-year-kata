<?php declare(strict_types=1);

namespace KataTests;

use Kata\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    /**
     * @dataProvider yearsDataProvider
     */
    public function testYearIsLeapYear(bool $expected, int $year): void
    {
        $leapYear = new LeapYear();

        $result = $leapYear->isLeapYear($year);

        self::assertEquals($expected, $result);
    }

    public function yearsDataProvider(): array
    {
        return [
            'test_not_multiple_of_4_is_not_leap_year' => [false, 1997],
            'test_multiple_of_4_are_leap_year' => [true, 1996],
            'test_multiple_of_100_are_not_leap_year' => [false, 1800],
            'test_multiple_of_400_are_leap_year' => [true, 1600],
        ];
    }
}
