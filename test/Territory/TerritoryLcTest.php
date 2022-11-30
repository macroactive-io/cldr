<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryLc;
use PHPUnit\Framework\TestCase;

class TerritoryLcTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryLc();

        self::assertSame('LC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
