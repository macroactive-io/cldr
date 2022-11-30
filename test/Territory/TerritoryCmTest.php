<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCm;
use PHPUnit\Framework\TestCase;

class TerritoryCmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCm();

        self::assertSame('CM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
