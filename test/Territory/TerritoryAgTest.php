<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAg;
use PHPUnit\Framework\TestCase;

class TerritoryAgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAg();

        self::assertSame('AG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
