<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCk;
use PHPUnit\Framework\TestCase;

class TerritoryCkTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCk();

        self::assertSame('CK', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
