<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMy;
use PHPUnit\Framework\TestCase;

class TerritoryMyTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMy();

        self::assertSame('MY', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
