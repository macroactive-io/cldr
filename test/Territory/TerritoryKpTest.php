<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryKp;
use PHPUnit\Framework\TestCase;

class TerritoryKpTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKp();

        self::assertSame('KP', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
