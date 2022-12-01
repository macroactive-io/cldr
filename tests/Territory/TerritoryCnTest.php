<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCn;
use PHPUnit\Framework\TestCase;

class TerritoryCnTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCn();

        self::assertSame('CN', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
