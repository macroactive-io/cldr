<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryIs;
use PHPUnit\Framework\TestCase;

class TerritoryIsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryIs();

        self::assertSame('IS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
