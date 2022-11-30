<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryUa;
use PHPUnit\Framework\TestCase;

class TerritoryUaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryUa();

        self::assertSame('UA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
