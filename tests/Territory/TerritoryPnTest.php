<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPn;
use PHPUnit\Framework\TestCase;

class TerritoryPnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPn();

        self::assertSame('PN', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
