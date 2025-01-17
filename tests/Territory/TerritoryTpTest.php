<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTp;
use PHPUnit\Framework\TestCase;

class TerritoryTpTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTp();

        self::assertSame('TP', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
