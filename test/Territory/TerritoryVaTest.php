<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryVa;
use PHPUnit\Framework\TestCase;

class TerritoryVaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryVa();

        self::assertSame('VA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
