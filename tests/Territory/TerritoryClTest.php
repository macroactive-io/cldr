<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCl;
use PHPUnit\Framework\TestCase;

class TerritoryClTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCl();

        self::assertSame('CL', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
