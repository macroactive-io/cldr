<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBf;
use PHPUnit\Framework\TestCase;

class TerritoryBfTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBf();

        self::assertSame('BF', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
