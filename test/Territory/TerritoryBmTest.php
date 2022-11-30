<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBm;
use PHPUnit\Framework\TestCase;

class TerritoryBmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBm();

        self::assertSame('BM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
