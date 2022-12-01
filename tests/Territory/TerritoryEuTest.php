<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryEu;
use PHPUnit\Framework\TestCase;

class TerritoryEuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryEu();

        self::assertSame('EU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
