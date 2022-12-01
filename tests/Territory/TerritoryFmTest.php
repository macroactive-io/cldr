<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryFm;
use PHPUnit\Framework\TestCase;

class TerritoryFmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryFm();

        self::assertSame('FM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
