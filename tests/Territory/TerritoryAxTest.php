<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAx;
use PHPUnit\Framework\TestCase;

class TerritoryAxTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAx();

        self::assertSame('AX', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
