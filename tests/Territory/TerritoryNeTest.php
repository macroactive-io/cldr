<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNe;
use PHPUnit\Framework\TestCase;

class TerritoryNeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNe();

        self::assertSame('NE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
