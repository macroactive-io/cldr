<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBz;
use PHPUnit\Framework\TestCase;

class TerritoryBzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBz();

        self::assertSame('BZ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('US', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
