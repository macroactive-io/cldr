<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryIr;
use PHPUnit\Framework\TestCase;

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
