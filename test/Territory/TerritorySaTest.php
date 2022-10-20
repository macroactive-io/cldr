<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

use PHPUnit\Framework\TestCase;

class TerritorySaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySa();

        self::assertSame('SA', $territory->code());
        self::assertSame(0, $territory->firstDay());
        self::assertSame(5, $territory->weekendStart());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
