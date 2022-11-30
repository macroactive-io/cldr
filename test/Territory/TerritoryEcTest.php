<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryEc;
use PHPUnit\Framework\TestCase;

class TerritoryEcTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryEc();

        self::assertSame('EC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
