<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMo;
use PHPUnit\Framework\TestCase;

class TerritoryMoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMo();

        self::assertSame('MO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
