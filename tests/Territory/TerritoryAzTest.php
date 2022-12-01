<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAz;
use PHPUnit\Framework\TestCase;

class TerritoryAzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAz();

        self::assertSame('AZ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
