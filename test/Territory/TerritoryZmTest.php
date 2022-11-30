<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryZm;
use PHPUnit\Framework\TestCase;

class TerritoryZmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryZm();

        self::assertSame('ZM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
