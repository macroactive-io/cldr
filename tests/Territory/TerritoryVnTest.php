<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryVn;
use PHPUnit\Framework\TestCase;

class TerritoryVnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryVn();

        self::assertSame('VN', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
