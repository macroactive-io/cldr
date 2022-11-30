<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTh;
use PHPUnit\Framework\TestCase;

class TerritoryThTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTh();

        self::assertSame('TH', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
