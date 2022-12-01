<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBv;
use PHPUnit\Framework\TestCase;

class TerritoryBvTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBv();

        self::assertSame('BV', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
