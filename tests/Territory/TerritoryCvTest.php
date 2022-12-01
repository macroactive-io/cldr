<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCv;
use PHPUnit\Framework\TestCase;

class TerritoryCvTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCv();

        self::assertSame('CV', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
