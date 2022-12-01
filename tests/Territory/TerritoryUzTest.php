<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryUz;
use PHPUnit\Framework\TestCase;

class TerritoryUzTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryUz();

        self::assertSame('UZ', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
