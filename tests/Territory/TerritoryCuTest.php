<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCu;
use PHPUnit\Framework\TestCase;

class TerritoryCuTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCu();

        self::assertSame('CU', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
