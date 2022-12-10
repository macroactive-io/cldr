<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBh;
use PHPUnit\Framework\TestCase;

class TerritoryBhTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBh();

        self::assertSame('BH', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}