<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBy;
use PHPUnit\Framework\TestCase;

class TerritoryByTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBy();

        self::assertSame('BY', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
