<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryGd;
use PHPUnit\Framework\TestCase;

class TerritoryGdTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryGd();

        self::assertSame('GD', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
