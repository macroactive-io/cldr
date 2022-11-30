<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryUs;
use PHPUnit\Framework\TestCase;

class TerritoryUsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryUs();

        self::assertSame('US', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('US', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
