<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySi;
use PHPUnit\Framework\TestCase;

class TerritorySiTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySi();

        self::assertSame('SI', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
