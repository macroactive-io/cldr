<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryAr;
use PHPUnit\Framework\TestCase;

class TerritoryArTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryAr();

        self::assertSame('AR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
