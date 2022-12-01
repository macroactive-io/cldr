<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryJp;
use PHPUnit\Framework\TestCase;

class TerritoryJpTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryJp();

        self::assertSame('JP', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
