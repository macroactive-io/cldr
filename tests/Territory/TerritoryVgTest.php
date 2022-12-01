<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryVg;
use PHPUnit\Framework\TestCase;

class TerritoryVgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryVg();

        self::assertSame('VG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
