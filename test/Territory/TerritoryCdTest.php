<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCd;
use PHPUnit\Framework\TestCase;

class TerritoryCdTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCd();

        self::assertSame('CD', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
