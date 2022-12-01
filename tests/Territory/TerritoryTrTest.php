<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTr;
use PHPUnit\Framework\TestCase;

class TerritoryTrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTr();

        self::assertSame('TR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
