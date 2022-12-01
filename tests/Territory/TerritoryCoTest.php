<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCo;
use PHPUnit\Framework\TestCase;

class TerritoryCoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCo();

        self::assertSame('CO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
