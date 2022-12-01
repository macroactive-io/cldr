<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySv;
use PHPUnit\Framework\TestCase;

class TerritorySvTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySv();

        self::assertSame('SV', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('US-Letter', $territory->paperSize());
    }
}
