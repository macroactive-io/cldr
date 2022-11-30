<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPr;
use PHPUnit\Framework\TestCase;

class TerritoryPrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPr();

        self::assertSame('PR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('US', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
