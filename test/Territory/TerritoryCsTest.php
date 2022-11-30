<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCs;
use PHPUnit\Framework\TestCase;

class TerritoryCsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCs();

        self::assertSame('CS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
