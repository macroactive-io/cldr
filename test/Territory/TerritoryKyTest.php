<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use PHPUnit\Framework\TestCase;

use Macroactive\Cldr\Territory\TerritoryKy;

class TerritoryKyTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKy();

        self::assertSame('KY', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('US', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
