<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryUg;
use PHPUnit\Framework\TestCase;

class TerritoryUgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryUg();

        self::assertSame('UG', $territory->code());
        self::assertSame(1, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
