<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Territory\TerritoryIn;

class TerritoryInTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIn();

        self::assertSame('IN', $territory->code());
        self::assertSame(1, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
