<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryLu;
use PHPUnit\Framework\TestCase;

class TerritoryLuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryLu();

        self::assertSame('LU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
