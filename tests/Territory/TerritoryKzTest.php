<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryKz;
use PHPUnit\Framework\TestCase;

class TerritoryKzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryKz();

        self::assertSame('KZ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}