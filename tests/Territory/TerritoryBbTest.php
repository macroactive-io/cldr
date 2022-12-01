<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBb;
use PHPUnit\Framework\TestCase;

class TerritoryBbTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBb();

        self::assertSame('BB', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
