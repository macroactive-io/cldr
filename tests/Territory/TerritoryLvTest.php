<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryLv;
use PHPUnit\Framework\TestCase;

class TerritoryLvTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryLv();

        self::assertSame('LV', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
