<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryNc;
use PHPUnit\Framework\TestCase;

class TerritoryNcTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryNc();

        self::assertSame('NC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
