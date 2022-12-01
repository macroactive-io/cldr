<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySm;
use PHPUnit\Framework\TestCase;

class TerritorySmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySm();

        self::assertSame('SM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
