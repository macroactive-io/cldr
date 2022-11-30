<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryZa;
use PHPUnit\Framework\TestCase;

class TerritoryZaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryZa();

        self::assertSame('ZA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
