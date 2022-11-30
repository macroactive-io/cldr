<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryVe;
use PHPUnit\Framework\TestCase;

class TerritoryVeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryVe();

        self::assertSame('VE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
