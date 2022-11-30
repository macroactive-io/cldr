<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNu;
use PHPUnit\Framework\TestCase;

class TerritoryNuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNu();

        self::assertSame('NU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
