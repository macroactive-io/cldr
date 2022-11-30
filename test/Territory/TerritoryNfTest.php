<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNf;
use PHPUnit\Framework\TestCase;

class TerritoryNfTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNf();

        self::assertSame('NF', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
