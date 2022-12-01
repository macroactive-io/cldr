<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTo;
use PHPUnit\Framework\TestCase;

class TerritoryToTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTo();

        self::assertSame('TO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
