<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPe;
use PHPUnit\Framework\TestCase;

class TerritoryPeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPe();

        self::assertSame('PE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
