<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryUm;
use PHPUnit\Framework\TestCase;

class TerritoryUmTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryUm();

        self::assertSame('UM', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
