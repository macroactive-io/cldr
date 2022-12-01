<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySj;
use PHPUnit\Framework\TestCase;

class TerritorySjTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySj();

        self::assertSame('SJ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
