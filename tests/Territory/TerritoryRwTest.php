<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryRw;
use PHPUnit\Framework\TestCase;

class TerritoryRwTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryRw();

        self::assertSame('RW', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
