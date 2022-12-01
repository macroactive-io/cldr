<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMu;
use PHPUnit\Framework\TestCase;

class TerritoryMuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMu();

        self::assertSame('MU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
