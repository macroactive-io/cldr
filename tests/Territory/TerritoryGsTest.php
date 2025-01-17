<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGs;
use PHPUnit\Framework\TestCase;

class TerritoryGsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGs();

        self::assertSame('GS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
