<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySk;
use PHPUnit\Framework\TestCase;

class TerritorySkTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySk();

        self::assertSame('SK', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
