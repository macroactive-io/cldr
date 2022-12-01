<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySo;
use PHPUnit\Framework\TestCase;

class TerritorySoTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySo();

        self::assertSame('SO', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
