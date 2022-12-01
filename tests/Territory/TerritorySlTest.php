<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySl;
use PHPUnit\Framework\TestCase;

class TerritorySlTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySl();

        self::assertSame('SL', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
