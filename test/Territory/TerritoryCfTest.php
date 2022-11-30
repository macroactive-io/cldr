<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCf;
use PHPUnit\Framework\TestCase;

class TerritoryCfTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCf();

        self::assertSame('CF', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
