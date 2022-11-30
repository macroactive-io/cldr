<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Territory\TerritoryPh;

class TerritoryPhTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPh();

        self::assertSame('PH', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
