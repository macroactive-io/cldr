<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBa;
use PHPUnit\Framework\TestCase;

class TerritoryBaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBa();

        self::assertSame('BA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
