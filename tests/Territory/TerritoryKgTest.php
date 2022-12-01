<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryKg;
use PHPUnit\Framework\TestCase;

class TerritoryKgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKg();

        self::assertSame('KG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
