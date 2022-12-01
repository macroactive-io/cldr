<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMh;
use PHPUnit\Framework\TestCase;

class TerritoryMhTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMh();

        self::assertSame('MH', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
