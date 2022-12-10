<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryBe;
use PHPUnit\Framework\TestCase;

class TerritoryBeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryBe();

        self::assertSame('BE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}