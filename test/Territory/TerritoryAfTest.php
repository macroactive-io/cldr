<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

use PHPUnit\Framework\TestCase;

class TerritoryAfTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAf();

        self::assertSame('AF', $territory->code());
        self::assertSame(6, $territory->firstDay());
        self::assertSame(4, $territory->weekendStart());
        self::assertSame(5, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
