<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCa;
use PHPUnit\Framework\TestCase;

class TerritoryCaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCa();

        self::assertSame('CA', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
