<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryRe;
use PHPUnit\Framework\TestCase;

class TerritoryReTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryRe();

        self::assertSame('RE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
