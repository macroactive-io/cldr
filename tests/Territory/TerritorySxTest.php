<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySx;
use PHPUnit\Framework\TestCase;

class TerritorySxTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySx();

        self::assertSame('SX', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
