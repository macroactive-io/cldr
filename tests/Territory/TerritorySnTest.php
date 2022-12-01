<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySn;
use PHPUnit\Framework\TestCase;

class TerritorySnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySn();

        self::assertSame('SN', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
