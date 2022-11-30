<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBg;
use PHPUnit\Framework\TestCase;

class TerritoryBgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBg();

        self::assertSame('BG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
