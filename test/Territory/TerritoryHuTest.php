<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryHu;
use PHPUnit\Framework\TestCase;

class TerritoryHuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryHu();

        self::assertSame('HU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
