<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMt;
use PHPUnit\Framework\TestCase;

class TerritoryMtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMt();

        self::assertSame('MT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
