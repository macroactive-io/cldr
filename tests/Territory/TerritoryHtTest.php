<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryHt;
use PHPUnit\Framework\TestCase;

class TerritoryHtTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryHt();

        self::assertSame('HT', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
