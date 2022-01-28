<?php declare(strict_types=1);

namespace KataTests;

use Kata\NextLeapYearGenerator;
use PHPUnit\Framework\TestCase;

class NextLeapYearGeneratorTest extends TestCase
{
    // 1. Mostrar los próximos 10 años bisiestos a partir del año actual
    // > Output: `[2024, 2028, 2032, 2036, 2040, 2044, 2048, 2052, 2056, 2060]`

    public function testReturns10LeapNumbersFromNow(): void
    {
        $leapYearGenerator = new NextLeapYearGenerator();

        $result = $leapYearGenerator->next10LeapNumbers();

        self::assertEquals([2024, 2028, 2032, 2036, 2040, 2044, 2048, 2052, 2056, 2060], $result);
    }
}
