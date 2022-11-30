<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAw;
use PHPUnit\Framework\TestCase;

class TerritoryAwTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAw();

        self::assertSame('AW', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
