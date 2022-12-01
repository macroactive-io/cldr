<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryYu;
use PHPUnit\Framework\TestCase;

class TerritoryYuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryYu();

        self::assertSame('YU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
