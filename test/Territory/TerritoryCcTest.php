<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCc;
use PHPUnit\Framework\TestCase;

class TerritoryCcTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCc();

        self::assertSame('CC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
