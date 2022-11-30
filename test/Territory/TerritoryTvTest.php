<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTv;
use PHPUnit\Framework\TestCase;

class TerritoryTvTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTv();

        self::assertSame('TV', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
