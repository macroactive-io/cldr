<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Territory\TerritoryIr;

class TerritoryIrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIr();

        self::assertSame('IR', $territory->code());
        self::assertSame(5, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
