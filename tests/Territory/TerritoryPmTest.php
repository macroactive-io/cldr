<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPm;
use PHPUnit\Framework\TestCase;

class TerritoryPmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPm();

        self::assertSame('PM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
