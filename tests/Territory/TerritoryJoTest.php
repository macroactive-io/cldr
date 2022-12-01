<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryJo;
use PHPUnit\Framework\TestCase;

class TerritoryJoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryJo();

        self::assertSame('JO', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
