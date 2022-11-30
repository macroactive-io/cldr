<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCh;
use PHPUnit\Framework\TestCase;

class TerritoryChTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCh();

        self::assertSame('CH', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
