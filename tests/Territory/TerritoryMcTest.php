<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMc;
use PHPUnit\Framework\TestCase;

class TerritoryMcTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMc();

        self::assertSame('MC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
