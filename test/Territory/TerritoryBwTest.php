<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBw;
use PHPUnit\Framework\TestCase;

class TerritoryBwTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBw();

        self::assertSame('BW', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
