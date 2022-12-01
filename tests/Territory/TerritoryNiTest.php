<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNi;
use PHPUnit\Framework\TestCase;

class TerritoryNiTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNi();

        self::assertSame('NI', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
