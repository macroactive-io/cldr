<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryDo;
use PHPUnit\Framework\TestCase;

class TerritoryDoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryDo();

        self::assertSame('DO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
