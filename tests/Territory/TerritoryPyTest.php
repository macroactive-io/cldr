<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPy;
use PHPUnit\Framework\TestCase;

class TerritoryPyTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPy();

        self::assertSame('PY', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
