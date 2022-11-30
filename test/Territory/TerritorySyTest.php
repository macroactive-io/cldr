<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySy;
use PHPUnit\Framework\TestCase;

class TerritorySyTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySy();

        self::assertSame('SY', $territory->code());
        self::assertSame(6, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
