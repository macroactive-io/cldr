<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTw;
use PHPUnit\Framework\TestCase;

class TerritoryTwTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTw();

        self::assertSame('TW', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
