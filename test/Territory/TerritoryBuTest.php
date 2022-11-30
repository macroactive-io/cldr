<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBu;
use PHPUnit\Framework\TestCase;

class TerritoryBuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBu();

        self::assertSame('BU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
