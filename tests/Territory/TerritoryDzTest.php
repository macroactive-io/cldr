<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryDz;
use PHPUnit\Framework\TestCase;

class TerritoryDzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryDz();

        self::assertSame('DZ', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
