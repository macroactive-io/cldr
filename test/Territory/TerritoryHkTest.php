<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryHk;
use PHPUnit\Framework\TestCase;

class TerritoryHkTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryHk();

        self::assertSame('HK', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
