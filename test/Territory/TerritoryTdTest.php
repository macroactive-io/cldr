<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTd;
use PHPUnit\Framework\TestCase;

class TerritoryTdTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTd();

        self::assertSame('TD', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
