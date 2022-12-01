<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryMs;
use PHPUnit\Framework\TestCase;

class TerritoryMsTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryMs();

        self::assertSame('MS', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
