<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryPf;
use PHPUnit\Framework\TestCase;

class TerritoryPfTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryPf();

        self::assertSame('PF', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
