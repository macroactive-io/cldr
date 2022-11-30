<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBn;
use PHPUnit\Framework\TestCase;

class TerritoryBnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBn();

        self::assertSame('BN', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
