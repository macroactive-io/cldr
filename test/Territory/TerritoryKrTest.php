<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryKr;
use PHPUnit\Framework\TestCase;

class TerritoryKrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKr();

        self::assertSame('KR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
