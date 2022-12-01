<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAc;
use PHPUnit\Framework\TestCase;

class TerritoryAcTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAc();

        self::assertSame('AC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
