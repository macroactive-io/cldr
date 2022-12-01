<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMn;
use PHPUnit\Framework\TestCase;

class TerritoryMnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMn();

        self::assertSame('MN', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
