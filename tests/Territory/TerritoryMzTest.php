<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMz;
use PHPUnit\Framework\TestCase;

class TerritoryMzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMz();

        self::assertSame('MZ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
