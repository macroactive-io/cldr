<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNa;
use PHPUnit\Framework\TestCase;

class TerritoryNaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNa();

        self::assertSame('NA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
