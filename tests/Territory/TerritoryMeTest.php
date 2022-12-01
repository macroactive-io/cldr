<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMe;
use PHPUnit\Framework\TestCase;

class TerritoryMeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMe();

        self::assertSame('ME', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
