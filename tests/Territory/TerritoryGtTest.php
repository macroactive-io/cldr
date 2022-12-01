<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGt;
use PHPUnit\Framework\TestCase;

class TerritoryGtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGt();

        self::assertSame('GT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
