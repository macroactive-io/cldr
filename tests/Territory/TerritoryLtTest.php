<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryLt;
use PHPUnit\Framework\TestCase;

class TerritoryLtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryLt();

        self::assertSame('LT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
