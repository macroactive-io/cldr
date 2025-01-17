<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCx;
use PHPUnit\Framework\TestCase;

class TerritoryCxTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCx();

        self::assertSame('CX', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
