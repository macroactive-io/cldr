<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGy;
use PHPUnit\Framework\TestCase;

class TerritoryGyTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGy();

        self::assertSame('GY', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
