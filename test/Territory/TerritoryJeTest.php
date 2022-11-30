<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryJe;
use PHPUnit\Framework\TestCase;

class TerritoryJeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryJe();

        self::assertSame('JE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
