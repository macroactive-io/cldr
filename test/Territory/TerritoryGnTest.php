<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGn;
use PHPUnit\Framework\TestCase;

class TerritoryGnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGn();

        self::assertSame('GN', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
