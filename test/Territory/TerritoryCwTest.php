<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCw;
use PHPUnit\Framework\TestCase;

class TerritoryCwTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCw();

        self::assertSame('CW', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
