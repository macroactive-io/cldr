<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPl;
use PHPUnit\Framework\TestCase;

class TerritoryPlTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPl();

        self::assertSame('PL', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
