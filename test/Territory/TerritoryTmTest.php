<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTm;
use PHPUnit\Framework\TestCase;

class TerritoryTmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTm();

        self::assertSame('TM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
