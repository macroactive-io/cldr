<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryHr;
use PHPUnit\Framework\TestCase;

class TerritoryHrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryHr();

        self::assertSame('HR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
