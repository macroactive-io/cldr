<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Tests\Territory;

use Macroactive\Cldr\Territory\TerritoryTc;
use PHPUnit\Framework\TestCase;

class TerritoryTcTest extends TestCase
{
    public function testProperties(): void
    {
        $territory = new TerritoryTc();

        self::assertSame('TC', $territory->code());
        self::assertSame(0, $territory->weekendEnd());
        self::assertSame('metric', $territory->measurementSystem());
        self::assertSame('A4', $territory->paperSize());
    }
}
