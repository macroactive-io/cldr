<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPk;
use PHPUnit\Framework\TestCase;

class TerritoryPkTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPk();

        self::assertSame('PK', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
