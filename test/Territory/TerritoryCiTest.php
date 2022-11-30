<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryCi;
use PHPUnit\Framework\TestCase;

class TerritoryCiTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryCi();

        self::assertSame('CI', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
