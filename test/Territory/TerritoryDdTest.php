<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryDd;
use PHPUnit\Framework\TestCase;

class TerritoryDdTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryDd();

        self::assertSame('DD', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
