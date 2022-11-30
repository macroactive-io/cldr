<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryXk;
use PHPUnit\Framework\TestCase;

class TerritoryXkTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryXk();

        self::assertSame('XK', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
