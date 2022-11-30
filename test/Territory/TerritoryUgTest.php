<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Territory\TerritoryUg;

class TerritoryUgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryUg();

        self::assertSame('UG', $territory->code());
        self::assertSame(1, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
