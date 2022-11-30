<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryKm;
use PHPUnit\Framework\TestCase;

class TerritoryKmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKm();

        self::assertSame('KM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
