<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryEe;
use PHPUnit\Framework\TestCase;

class TerritoryEeTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryEe();

        self::assertSame('EE', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
