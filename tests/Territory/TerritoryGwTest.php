<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGw;
use PHPUnit\Framework\TestCase;

class TerritoryGwTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGw();

        self::assertSame('GW', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
