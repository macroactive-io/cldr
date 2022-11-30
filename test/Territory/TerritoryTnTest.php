<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTn;
use PHPUnit\Framework\TestCase;

class TerritoryTnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTn();

        self::assertSame('TN', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
