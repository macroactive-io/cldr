<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryRs;
use PHPUnit\Framework\TestCase;

class TerritoryRsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryRs();

        self::assertSame('RS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
