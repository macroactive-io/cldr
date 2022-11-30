<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPs;
use PHPUnit\Framework\TestCase;

class TerritoryPsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPs();

        self::assertSame('PS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
