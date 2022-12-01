<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryDj;
use PHPUnit\Framework\TestCase;

class TerritoryDjTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryDj();

        self::assertSame('DJ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
