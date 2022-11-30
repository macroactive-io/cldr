<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCg;
use PHPUnit\Framework\TestCase;

class TerritoryCgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCg();

        self::assertSame('CG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
