<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySz;
use PHPUnit\Framework\TestCase;

class TerritorySzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySz();

        self::assertSame('SZ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
