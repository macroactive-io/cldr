<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySh;
use PHPUnit\Framework\TestCase;

class TerritoryShTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySh();

        self::assertSame('SH', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
