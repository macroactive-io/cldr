<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryIc;
use PHPUnit\Framework\TestCase;

class TerritoryIcTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIc();

        self::assertSame('IC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
