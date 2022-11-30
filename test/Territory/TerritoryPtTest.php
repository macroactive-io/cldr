<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPt;
use PHPUnit\Framework\TestCase;

class TerritoryPtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPt();

        self::assertSame('PT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
