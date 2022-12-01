<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMw;
use PHPUnit\Framework\TestCase;

class TerritoryMwTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMw();

        self::assertSame('MW', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
