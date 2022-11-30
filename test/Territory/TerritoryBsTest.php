<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Territory\TerritoryBs;

class TerritoryBsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBs();

        self::assertSame('BS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('US', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
