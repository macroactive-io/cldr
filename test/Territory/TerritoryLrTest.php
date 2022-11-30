<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Territory\TerritoryLr;

class TerritoryLrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryLr();

        self::assertSame('LR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('US', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
