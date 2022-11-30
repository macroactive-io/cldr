<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryZw;
use PHPUnit\Framework\TestCase;

class TerritoryZwTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryZw();

        self::assertSame('ZW', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
