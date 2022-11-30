<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGf;
use PHPUnit\Framework\TestCase;

class TerritoryGfTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGf();

        self::assertSame('GF', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
