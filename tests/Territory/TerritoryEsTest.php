<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryEs;
use PHPUnit\Framework\TestCase;

class TerritoryEsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryEs();

        self::assertSame('ES', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
