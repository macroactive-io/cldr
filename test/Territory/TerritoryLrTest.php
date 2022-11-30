<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryLr;
use PHPUnit\Framework\TestCase;

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
