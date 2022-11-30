<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryKh;
use PHPUnit\Framework\TestCase;

class TerritoryKhTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKh();

        self::assertSame('KH', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
