<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAe;
use PHPUnit\Framework\TestCase;

class TerritoryAeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAe();

        self::assertSame('AE', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
