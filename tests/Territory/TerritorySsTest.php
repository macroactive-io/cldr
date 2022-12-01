<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySs;
use PHPUnit\Framework\TestCase;

class TerritorySsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySs();

        self::assertSame('SS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
