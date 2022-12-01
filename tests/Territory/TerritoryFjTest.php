<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryFj;
use PHPUnit\Framework\TestCase;

class TerritoryFjTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryFj();

        self::assertSame('FJ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
