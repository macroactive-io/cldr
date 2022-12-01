<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGe;
use PHPUnit\Framework\TestCase;

class TerritoryGeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGe();

        self::assertSame('GE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
