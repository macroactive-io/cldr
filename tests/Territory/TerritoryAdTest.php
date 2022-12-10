<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAd;
use PHPUnit\Framework\TestCase;

class TerritoryAdTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAd();

        self::assertSame('AD', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}