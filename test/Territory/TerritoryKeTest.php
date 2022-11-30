<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryKe;
use PHPUnit\Framework\TestCase;

class TerritoryKeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKe();

        self::assertSame('KE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
