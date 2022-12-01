<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMl;
use PHPUnit\Framework\TestCase;

class TerritoryMlTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMl();

        self::assertSame('ML', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
