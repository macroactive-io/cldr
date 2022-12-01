<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAl;
use PHPUnit\Framework\TestCase;

class TerritoryAlTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAl();

        self::assertSame('AL', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
