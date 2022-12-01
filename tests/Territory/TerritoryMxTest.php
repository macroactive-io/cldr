<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMx;
use PHPUnit\Framework\TestCase;

class TerritoryMxTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMx();

        self::assertSame('MX', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
