<?php declare(strict_types=1);

namespace KataTests;

use Kata\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    private LeapYear $leapYear;

    protected function setUp(): void
    {
        $this->leapYear = new LeapYear();
    }

    /** @test **/
    public function given_2_is_not_leap_year(): void
    {
        self::assertFalse($this->leapYear->isLeapYear(2));
    }

    /** @test **/
    public function given_4_is_not_leap_year(): void
    {
        self::assertTrue($this->leapYear->isLeapYear(4));
    }

    /** @test **/
    public function given_8_is_not_leap_year(): void
    {
        self::assertTrue($this->leapYear->isLeapYear(8));
    }

    /**
     * @test
     * @dataProvider providerNumberDivisibleBy100ButNotBy400
     */
    public function given_a_number_divisible_by_100_but_not_by_400_is_not_a_leap_year(int $year): void
    {
        self::assertFalse($this->leapYear->isLeapYear($year));
    }

    public function providerNumberDivisibleBy100ButNotBy400(): iterable
    {
        yield [600];
        yield [1000];
        yield [1400];
        yield [1800];
    }
}
