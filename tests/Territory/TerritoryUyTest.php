<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryUy;
use PHPUnit\Framework\TestCase;

class TerritoryUyTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryUy();

        self::assertSame('UY', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
