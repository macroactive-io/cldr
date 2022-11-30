<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryLb;
use PHPUnit\Framework\TestCase;

class TerritoryLbTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryLb();

        self::assertSame('LB', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
