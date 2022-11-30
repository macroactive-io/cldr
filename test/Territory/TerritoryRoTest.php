<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryRo;
use PHPUnit\Framework\TestCase;

class TerritoryRoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryRo();

        self::assertSame('RO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
