<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBt;
use PHPUnit\Framework\TestCase;

class TerritoryBtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBt();

        self::assertSame('BT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
