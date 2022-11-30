<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTj;
use PHPUnit\Framework\TestCase;

class TerritoryTjTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTj();

        self::assertSame('TJ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
