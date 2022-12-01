<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryYd;
use PHPUnit\Framework\TestCase;

class TerritoryYdTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryYd();

        self::assertSame('YD', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
