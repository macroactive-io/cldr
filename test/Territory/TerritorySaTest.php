<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySa;
use PHPUnit\Framework\TestCase;

class TerritorySaTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySa();

        self::assertSame('SA', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
