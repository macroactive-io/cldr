<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryHn;
use PHPUnit\Framework\TestCase;

class TerritoryHnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryHn();

        self::assertSame('HN', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
