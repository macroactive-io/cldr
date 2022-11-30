<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryLa;
use PHPUnit\Framework\TestCase;

class TerritoryLaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryLa();

        self::assertSame('LA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
