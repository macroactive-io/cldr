<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBi;
use PHPUnit\Framework\TestCase;

class TerritoryBiTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBi();

        self::assertSame('BI', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
