<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryYe;
use PHPUnit\Framework\TestCase;

class TerritoryYeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryYe();

        self::assertSame('YE', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
