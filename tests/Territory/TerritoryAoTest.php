<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAo;
use PHPUnit\Framework\TestCase;

class TerritoryAoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAo();

        self::assertSame('AO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
