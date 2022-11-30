<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNt;
use PHPUnit\Framework\TestCase;

class TerritoryNtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNt();

        self::assertSame('NT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
