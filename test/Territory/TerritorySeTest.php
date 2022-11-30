<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySe;
use PHPUnit\Framework\TestCase;

class TerritorySeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySe();

        self::assertSame('SE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
