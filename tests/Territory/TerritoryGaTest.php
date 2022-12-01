<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGa;
use PHPUnit\Framework\TestCase;

class TerritoryGaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGa();

        self::assertSame('GA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
