<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryFo;
use PHPUnit\Framework\TestCase;

class TerritoryFoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryFo();

        self::assertSame('FO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
