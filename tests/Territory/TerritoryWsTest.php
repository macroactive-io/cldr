<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryWs;
use PHPUnit\Framework\TestCase;

class TerritoryWsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryWs();

        self::assertSame('WS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
