<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryDg;
use PHPUnit\Framework\TestCase;

class TerritoryDgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryDg();

        self::assertSame('DG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
