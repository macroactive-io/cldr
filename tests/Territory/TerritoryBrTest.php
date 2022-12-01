<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBr;
use PHPUnit\Framework\TestCase;

class TerritoryBrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBr();

        self::assertSame('BR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
