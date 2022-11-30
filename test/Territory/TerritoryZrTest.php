<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryZr;
use PHPUnit\Framework\TestCase;

class TerritoryZrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryZr();

        self::assertSame('ZR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
