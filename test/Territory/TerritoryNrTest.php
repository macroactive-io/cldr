<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNr;
use PHPUnit\Framework\TestCase;

class TerritoryNrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNr();

        self::assertSame('NR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
