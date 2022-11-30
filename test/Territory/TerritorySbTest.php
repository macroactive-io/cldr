<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySb;
use PHPUnit\Framework\TestCase;

class TerritorySbTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySb();

        self::assertSame('SB', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
