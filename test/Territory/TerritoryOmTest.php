<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryOm;
use PHPUnit\Framework\TestCase;

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
