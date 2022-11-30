<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCr;
use PHPUnit\Framework\TestCase;

class TerritoryCrTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCr();

        self::assertSame('CR', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
