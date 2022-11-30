<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryRu;
use PHPUnit\Framework\TestCase;

class TerritoryRuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryRu();

        self::assertSame('RU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
