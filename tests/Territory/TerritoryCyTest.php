<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCy;
use PHPUnit\Framework\TestCase;

class TerritoryCyTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCy();

        self::assertSame('CY', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
