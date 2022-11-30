<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryEa;
use PHPUnit\Framework\TestCase;

class TerritoryEaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryEa();

        self::assertSame('EA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
