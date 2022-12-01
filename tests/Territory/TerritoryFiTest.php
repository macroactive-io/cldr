<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryFi;
use PHPUnit\Framework\TestCase;

class TerritoryFiTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryFi();

        self::assertSame('FI', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
