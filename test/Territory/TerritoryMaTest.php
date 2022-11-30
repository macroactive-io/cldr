<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMa;
use PHPUnit\Framework\TestCase;

class TerritoryMaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMa();

        self::assertSame('MA', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
