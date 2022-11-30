<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryFx;
use PHPUnit\Framework\TestCase;

class TerritoryFxTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryFx();

        self::assertSame('FX', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
