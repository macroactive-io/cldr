<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAu;
use PHPUnit\Framework\TestCase;

class TerritoryAuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAu();

        self::assertSame('AU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
