<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMg;
use PHPUnit\Framework\TestCase;

class TerritoryMgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMg();

        self::assertSame('MG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
