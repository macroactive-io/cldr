<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNz;
use PHPUnit\Framework\TestCase;

class TerritoryNzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNz();

        self::assertSame('NZ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
