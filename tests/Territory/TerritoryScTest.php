<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySc;
use PHPUnit\Framework\TestCase;

class TerritoryScTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySc();

        self::assertSame('SC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
