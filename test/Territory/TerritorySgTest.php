<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

use PHPUnit\Framework\TestCase;

class TerritorySgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySg();

        self::assertSame('SG', $territory->code());
        self::assertSame(0, $territory->firstDay());
        self::assertSame(6, $territory->weekendStart());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
