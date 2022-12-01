<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySt;
use PHPUnit\Framework\TestCase;

class TerritoryStTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySt();

        self::assertSame('ST', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
