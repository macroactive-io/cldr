<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTa;
use PHPUnit\Framework\TestCase;

class TerritoryTaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTa();

        self::assertSame('TA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
