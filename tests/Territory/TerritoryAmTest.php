<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAm;
use PHPUnit\Framework\TestCase;

class TerritoryAmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAm();

        self::assertSame('AM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
