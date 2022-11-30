<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCz;
use PHPUnit\Framework\TestCase;

class TerritoryCzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCz();

        self::assertSame('CZ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
