<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryKn;
use PHPUnit\Framework\TestCase;

class TerritoryKnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKn();

        self::assertSame('KN', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
