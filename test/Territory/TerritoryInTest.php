<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

use PHPUnit\Framework\TestCase;

class TerritoryInTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIn();

        self::assertSame('IN', $territory->code());
        self::assertSame(0, $territory->firstDay());
        self::assertSame(0, $territory->weekendStart());
        self::assertSame(1, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
