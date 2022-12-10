<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMk;
use PHPUnit\Framework\TestCase;

class TerritoryMkTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMk();

        self::assertSame('MK', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}