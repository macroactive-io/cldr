<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritorySg;
use PHPUnit\Framework\TestCase;

class TerritorySgTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritorySg();

        self::assertSame('SG', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
