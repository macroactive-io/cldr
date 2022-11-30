<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Territory\TerritoryOm;

class TerritoryOmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryOm();

        self::assertSame('OM', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
