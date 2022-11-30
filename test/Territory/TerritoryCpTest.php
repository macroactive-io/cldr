<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCp;
use PHPUnit\Framework\TestCase;

class TerritoryCpTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCp();

        self::assertSame('CP', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
