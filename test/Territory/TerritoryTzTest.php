<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTz;
use PHPUnit\Framework\TestCase;

class TerritoryTzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTz();

        self::assertSame('TZ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
