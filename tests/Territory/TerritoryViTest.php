<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryVi;
use PHPUnit\Framework\TestCase;

class TerritoryViTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryVi();

        self::assertSame('VI', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
