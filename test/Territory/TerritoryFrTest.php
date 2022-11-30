<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryFr;
use PHPUnit\Framework\TestCase;

class TerritoryFrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryFr();

        self::assertSame('FR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
