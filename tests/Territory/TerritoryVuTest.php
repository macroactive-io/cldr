<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryVu;
use PHPUnit\Framework\TestCase;

class TerritoryVuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryVu();

        self::assertSame('VU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
