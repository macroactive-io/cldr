<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryFk;
use PHPUnit\Framework\TestCase;

class TerritoryFkTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryFk();

        self::assertSame('FK', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
