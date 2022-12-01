<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPa;
use PHPUnit\Framework\TestCase;

class TerritoryPaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPa();

        self::assertSame('PA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
