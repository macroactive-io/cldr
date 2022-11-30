<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryKi;
use PHPUnit\Framework\TestCase;

class TerritoryKiTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKi();

        self::assertSame('KI', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
