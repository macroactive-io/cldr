<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAq;
use PHPUnit\Framework\TestCase;

class TerritoryAqTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAq();

        self::assertSame('AQ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
