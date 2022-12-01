<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPh;
use PHPUnit\Framework\TestCase;

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
