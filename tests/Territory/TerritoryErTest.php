<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryEr;
use PHPUnit\Framework\TestCase;

class TerritoryErTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryEr();

        self::assertSame('ER', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
