<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryLs;
use PHPUnit\Framework\TestCase;

class TerritoryLsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryLs();

        self::assertSame('LS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
