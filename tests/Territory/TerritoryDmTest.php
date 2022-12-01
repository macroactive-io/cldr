<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryDm;
use PHPUnit\Framework\TestCase;

class TerritoryDmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryDm();

        self::assertSame('DM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
