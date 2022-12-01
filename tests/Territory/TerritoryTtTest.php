<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTt;
use PHPUnit\Framework\TestCase;

class TerritoryTtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTt();

        self::assertSame('TT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
