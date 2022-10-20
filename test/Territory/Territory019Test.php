<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

use PHPUnit\Framework\TestCase;

class Territory019Test extends TestCase
{
    public function testProperties(): void
    {
        $territory = new Territory019();

        self::assertSame('019', $territory->code());
        self::assertSame(1, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
